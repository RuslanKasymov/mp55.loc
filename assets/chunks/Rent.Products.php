<div class="col-sm-12">
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleIndicators[[+id]]" class="carousel slide m-b_50" data-ride="carousel">
                <ol class="carousel-indicators">
                    [[getImageList?
                    &tvname=`MProductImage`
                    &tpl=`MProduct.ImageDots.RowTpl`
                    &docid=[[+id]]
                    ]]
                </ol>
                <div class="carousel-inner" role="listbox">
                    [[getImageList?
                    &tvname=`MProductImage`
                    &tpl=`MProduct.Image.RowTpl`
                    &docid=[[+id]]
                    ]]
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators[[+id]]" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators[[+id]]" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <a href="#order_block">
                <div class="prod_cart_btn animaite">Арендовать</div>
            </a>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="title_tovar">
                [[#[[+id]].pagetitle]]
            </div>
            <div class="harateristic m-b_50">
                <div class="har-title">Технические характеристики</div>
                [[getImageList?
                &tvname=`MProductHaracter`
                &tpl=`MProduct.Haracter.RowTpl`
                &docid=[[+id]]
                ]]
                <div class="har-title">Грузоподъемность</div>
                [[getImageList?
                &tvname=`MProductGruz`
                &tpl=`MProduct.Haracter.RowTpl`
                &docid=[[+id]]
                ]]
            </div>
        </div>
    </div>
</div>
