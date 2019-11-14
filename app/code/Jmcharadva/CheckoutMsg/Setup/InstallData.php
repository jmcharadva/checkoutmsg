<?php
namespace Jmcharadva\CheckoutMsg\Setup;
use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\SchemaSetupInterface; 
 
class InstallData implements InstallDataInterface
{
    private $blockFactory;
 
    public function __construct(BlockFactory $blockFactory)
    {
        $this->blockFactory = $blockFactory;
    }
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.0', '<')) 
        {
            $cmsBlockData = [
                'title' => 'Checkout Page Message',
                'identifier' => 'checkout-msg',
                'content' => '<div class="checkout-page-message">This is demo text</div>',
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0
            ];
            $this->blockFactory->create()->setData($cmsBlockData)->save();
        }
  
    }
} 
