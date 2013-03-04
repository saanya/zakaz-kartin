<div class="container">
    <!--<div class="modal" id="Login">-->
        <div class="modal-header" style="text-align: center;">
            <h3>Форма заказа</h3>
        </div>
        <div class="modal-body" style="max-height: 800px;" >
        <form action="<?php echo base_url();?>" method="post" id="formInfo">
            <table class="table table-bordered" id="tableOrder" style="width:70%;">
                <tbody>
                        <tr>
                            <td>Имя *</td>
                            <td>
                                <div class="input-prepend">
                                    <span class="add-on">
                                        <i class="icon-user"></i>
                                    </span>
                                    <input id="nameUser" name="name" class="span2" type="text">
                                </div>
                                <!--<input type="text" />-->
                            </td>
                        </tr>
                        <tr>
                            <td>Email *</td>
                            <td>
                                <div class="input-prepend">
                                    <span class="add-on">
                                        <i class="icon-envelope"></i>
                                    </span>
                                    <input id="mail" name="email" class="span2" type="text">
                                </div>
                                <!--<input type="text" id="mail" />-->
                            </td>
                        </tr>
                         <tr>
                            <td>Skype </td>
                            <td>
                                <div class="input-prepend">
                                    <span class="add-on">
                                        <i class="icon-info-sign"></i>
                                    </span>
                                    <input id="skype" name="skype" class="span2" type="text">
                                </div>
                                <!--<input type="text"  />-->
                            </td>
                        </tr>
                        <tr>
                            <td>Ваш коментарий</td>
                            <td><textarea name="description"></textarea></td>
                        </tr>
                </tbody>
            </table>
           
        </form>
            <div class="alert alert-info" style="margin: 0 auto; width:174px; height: 30px;">
                <input type="button" id="showFormLoad" class="btn btn-info" value="Прикрепить изображение" /> .
            </div>
                <div id="formLoadImg" style="display: none; margin: 15px auto 0; border:1px solid #ccc;border-radius: 4px; width: 70%; ">
                    <a href="#" id="closeFormLoadImg" style="float: right; margin:4px;" ><i class="icon-remove-circle"></i></a>
                        <form id="fileupload" action="<? echo base_url() . 'order/upload_img'; ?>" method="POST" enctype="multipart/form-data">
                            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                            <div class="row fileupload-buttonbar" style="margin: 0 auto; width: 70%;">
                                <div class="span7" style="margin-left: 0px;margin-top: 20px;"  >
                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                    <span class="btn btn-success fileinput-button">
                                        <span><i class="icon-plus icon-white"></i> Добавить </span>
                                        <input type="file" name="userfile" multiple>
                                    </span>
                                    <button type="submit" class="btn btn-primary start">
                                        <i class="icon-upload icon-white"></i> Начать загрузку
                                    </button>
                                    <button type="reset" class="btn btn-warning cancel">
                                        <i class="icon-ban-circle icon-white"></i> Отменить загрузку
                                    </button>
                                    <button type="button" class="btn btn-danger delete">
                                        <i class="icon-trash icon-white"></i> Удалить
                                    </button>
                                    <!--<input type="checkbox" class="toggle">-->
                                </div>
                                <div class="span5">
                                    <!-- The global progress bar -->
                                    <div class="progress progress-success progress-striped active fade">
                                        <div class="bar" style="width:0%;"></div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- The loading indicator is shown during image processing -->
                            <div class="fileupload-loading"></div>
                            
                            <!-- The table listing the files available for upload/download -->
                            <table class="table table-striped" style="margin: 0 auto; width: 70%;"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table> 
                            <small> Максимальный размер загружаемого файла <strong>5 MB</strong> </small> 
                            <small> Допустимые форматы для загрузки (<strong>JPG, GIF, PNG</strong>)</small>
                            <small> Используйте drag and drop для загрузки файлов в браузерах: Google Chrome, Mozilla Firefox and Apple Safari</small>
                     </form>
                </div>
            
            <div class="alert alert-info" style="margin: 15px auto; width:174px; height: 30px;">
                <button type="submit" class="btn btn-success"  id="sendForm">
                        <i class="icon-envelope icon-white"></i> Отправить письмо <img src="assets/img/fileupload/loading.gif" width="16px" height="16px" style="display:none;" alt="send" />
                </button>
                
                <!--<input type="submit" class="btn btn-success" value="Отправить письмо"  />.-->
            </div>
                
            
            
                <!-- modal-gallery is the modal dialog used for the image gallery -->
                        <div id="modal-gallery" class="modal modal-gallery hide fade">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                                <h3 class="modal-title"></h3>
                            </div>
                            <div class="modal-body"><div class="modal-image"></div></div>
                            <div class="modal-footer">
                                <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
                                <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
                                <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
                                <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
                            </div>
                        </div>

            

                         <!-- The template to display files available for upload -->
                        <script id="template-upload" type="text/x-tmpl">
                            {% for (var i=0, files=o.files, l=files.length, file=files[0]; i< l; file=files[++i]) { %}
                            <tr class="template-upload fade">
                                <td class="preview"><span class="fade"></span></td>
                                <td class="name">{%=file.name%}</td>
                                <td class="size">{%=o.formatFileSize(file.size)%}</td>
                                {% if (file.error) { %}
                                <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
                                {% } else if (o.files.valid && !i) { %}
                                <td>
                                    <div class="progress progress-success progress-striped active"><div class="bar" style="width:0%;"></div></div>
                                </td>
                                <td class="start">{% if (!o.options.autoUpload) { %}
                                    <button class="btn btn-primary">
                                        <i class="icon-upload icon-white"></i> {%=locale.fileupload.start%}
                                    </button>
                                    {% } %}</td>
                                {% } else { %}
                                <td colspan="2"></td>
                                {% } %}
                                <td class="cancel">{% if (!i) { %}
                                    <button class="btn btn-warning">
                                        <i class="icon-ban-circle icon-white"></i> {%=locale.fileupload.cancel%}
                                    </button>
                                    {% } %}</td>
                            </tr>
                            {% } %}
                            </script>

                            <div id="download-files">
                            <!-- The template to display files available for download -->
                            <script id="template-download" type="text/x-tmpl">
                                {% for (var i=0, files=o.files, l=files.length, file=files[0]; i< l; file=files[++i]) { %}
                                <tr class="template-download fade">
                                    {% if (file.error) { %}
                                    <td></td>
                                    <td class="name">{%=file.name%}</td>
                                    <td class="size">{%=o.formatFileSize(file.size)%}</td>
                                    <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
                                    {% } else { %}
                                    <td class="preview">{% if (file.thumbnail_url) { %}
                                        <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"><img width="100px" src="{%=file.thumbnail_url%}"></a>
                                        {% } %}</td>
                                    <td class="name">
                                        <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
                                    </td>
                                    <td class="size">{%=o.formatFileSize(file.size)%}</td>
                                    <td colspan="2"></td>
                                    {% } %}
                                    <td class="delete">
                                        <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                                            <i class="icon-trash icon-white"></i> {%=locale.fileupload.destroy%}
                                        </button>
                                        <input type="checkbox" name="delete" value="1">
                                    </td>

<!--                                    <td class="add">
                                        <button class="btn btn-success add-article"  title="{%=file.name%}" data-type="PRIMARYIMAGE" data-url="{%=file.url%}">
                                            <i class="icon-plus icon-white"></i> Add 
                                        </button>

                                    </td>-->
                                </tr>
                                {% } %}

                               
                                </script>
                              </div>




                       
            
            
            
        </div>
        <div class="alert alert-success" id="sendSuccess">
            Письмо успешно отправлено <a href='<?php echo base_url();?>' >вернуться на главную </a>
        </div>

    <!--</div>-->
</div>