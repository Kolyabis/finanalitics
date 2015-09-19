<!--///////////////////////////////////////// FOOTER START ////////////////////////////////////////////////-->
<div class="container">
    <div class="row footer-bar">
        <div class="col-lg-4 col-md-4 col-sm-4 padding-block-footer border-block-footer">sdfsdf</div>
        <div class="col-lg-4 col-md-4 col-sm-4 padding-block-footer border-block-footer">sdfsdf</div>
        <div class="col-lg-4 col-md-4 col-sm-4 padding-block-footer border-block-footer">sdfsdf</div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 padding-block-footer">sdfsdf</div>
    </div>
</div>
<!--////////////////////////////////////////// FOOTER END /////////////////////////////////////////////////-->
<!-- ************************************** Modal cp klient *************************************************** -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Вход клиента</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <!--<button type="button" class="btn btn-primary">Сохранить изменения</button>-->
            </div>
        </div>
    </div>
</div>
<!-- ************************************** Modal cp klient *************************************************** -->
<!-- ************************************** Modal send mail *************************************************** -->
<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="sendModalLabel">Обратная связь</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Введите email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="comment">Сообщение:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Оставьте ваше сообщение"></textarea>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="feedback" onclick="feedback()">Отправить</button>
            </div>
            <div class="alert alert-success"></div>
            <div class="alert alert-danger"></div>
        </div>
    </div>
</div>
<!-- ************************************** Modal send mail *************************************************** -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.js"></script>
<script src="/js/jsStyle.js"></script>
</body>
</html>