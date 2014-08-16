<?php
/**
 * @var \PetrGrishin\View\View $this
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
use PetrGrishin\HtmlTag\HtmlTag;

$container = HtmlTag::create(HtmlTag::TAG_DIV)
    ->setAttr('id', $containerId = $this->getUniqueIdentifier('container'))
    ->addClass('modal fade')
    ->begin();

?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><?=$this->getParam('title', '')?></h4>
            </div>
            <div class="modal-body">
                <?=$this->getParam('content', '')?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
<?php

$container->end();

$this->widget(\PetrGrishin\LoaderAction\LoaderActionWidget::className(), 'action')->run();

$this->setJsParams(array(
    'containerId' => $containerId,
));