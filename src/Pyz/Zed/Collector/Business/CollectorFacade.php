<?php

namespace Pyz\Zed\Collector\Business;

use Generated\Shared\Transfer\LocaleTransfer;
use Orm\Zed\Touch\Persistence\SpyTouchQuery;
use Spryker\Zed\Collector\Business\CollectorFacade as SprykerCollectorFacade;
use Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface;
use Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface;
use Spryker\Zed\Collector\Business\Model\BatchResultInterface;

/**
 * @method \Pyz\Zed\Collector\Business\CollectorBusinessFactory getFactory()
 */
class CollectorFacade extends SprykerCollectorFacade
{

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runSearchProductCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createSearchProductCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageCategoryNodeCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageCategoryNodeCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageNavigationCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface  $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageNavigationCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStoragePageCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface  $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStoragePageCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageProductCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface  $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageProductCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageRedirectCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface  $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageRedirectCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageTranslationCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface  $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageTranslationCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageUrlCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface  $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageUrlCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

    /**
     * @param \Orm\Zed\Touch\Persistence\SpyTouchQuery $baseQuery
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $result
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $dataWriter
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     *
     * @return void
     */
    public function runStorageBlockCollector(SpyTouchQuery $baseQuery, LocaleTransfer $locale, BatchResultInterface $result, WriterInterface $dataWriter, TouchUpdaterInterface $touchUpdater)
    {
        $this->getFactory()->createStorageBlockCollector()->run($baseQuery, $locale, $result, $dataWriter, $touchUpdater);
    }

}
