<?php

namespace Pyz\Zed\Collector\Business\Storage;

use Generated\Shared\Transfer\LocaleTransfer;
use Orm\Zed\Glossary\Persistence\Map\SpyGlossaryKeyTableMap;
use Orm\Zed\Glossary\Persistence\Map\SpyGlossaryTranslationTableMap;
use Orm\Zed\Locale\Persistence\Map\SpyLocaleTableMap;
use Orm\Zed\Touch\Persistence\Map\SpyTouchTableMap;
use Orm\Zed\Touch\Persistence\SpyTouchQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Shared\Glossary\Code\KeyBuilder\GlossaryKeyBuilder;
use Spryker\Zed\Collector\Business\Exporter\AbstractPropelCollectorPlugin;
use Spryker\Zed\Collector\Business\Exporter\Writer\KeyValue\TouchUpdaterSet;

class TranslationCollector extends AbstractPropelCollectorPlugin
{

    use GlossaryKeyBuilder;

    protected function getTouchItemType()
    {
        return 'translation';
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchQuery
     */
    protected function createQuery(SpyTouchQuery $baseQuery, LocaleTransfer $locale)
    {
        $baseQuery->addJoin(
            SpyTouchTableMap::COL_ITEM_ID,
            SpyGlossaryTranslationTableMap::COL_ID_GLOSSARY_TRANSLATION,
            Criteria::INNER_JOIN
        );
        $baseQuery->addJoin(
            SpyGlossaryTranslationTableMap::COL_FK_GLOSSARY_KEY,
            SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY,
            Criteria::INNER_JOIN
        );
        $baseQuery->addJoin(
            SpyGlossaryTranslationTableMap::COL_FK_LOCALE,
            SpyLocaleTableMap::COL_ID_LOCALE,
            Criteria::INNER_JOIN
        );

        $baseQuery->addAnd(SpyLocaleTableMap::COL_LOCALE_NAME, $locale->getLocaleName(), Criteria::EQUAL);
        $baseQuery->addAnd(SpyLocaleTableMap::COL_IS_ACTIVE, true, Criteria::EQUAL);
        $baseQuery->addAnd(SpyGlossaryKeyTableMap::COL_IS_ACTIVE, true, Criteria::EQUAL);
        $baseQuery->addAnd(SpyGlossaryTranslationTableMap::COL_IS_ACTIVE, true, Criteria::EQUAL);

        $baseQuery->clearSelectColumns();

        $baseQuery->withColumn(SpyGlossaryTranslationTableMap::COL_VALUE, 'translation_value');
        $baseQuery->withColumn(SpyGlossaryKeyTableMap::COL_KEY, 'translation_key');
        $baseQuery->withColumn(
            SpyTouchTableMap::COL_ID_TOUCH,
            self::TOUCH_EXPORTER_ID
        );

        return $baseQuery;
    }

    /**
     * @param array $resultSet
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\KeyValue\TouchUpdaterSet $touchUpdaterSet
     *
     * @return array
     */
    protected function processData($resultSet, LocaleTransfer $locale, TouchUpdaterSet $touchUpdaterSet)
    {
        $processedResultSet = [];

        foreach ($resultSet as $index => $translation) {
            $key = $this->generateKey($translation['translation_key'], $locale->getLocaleName());
            $processedResultSet[$key] = $translation['translation_value'];
            $touchUpdaterSet->add($key, $translation[self::TOUCH_EXPORTER_ID]);
        }

        return $processedResultSet;
    }

}
