<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <article class="col-sm-12 col-md-12 col-lg-6">


                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-custombutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>KONUM </h2>
                    </header>
                    <!-- widget div-->
                    <div>
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <?php echo $map['js']; ?>
                            <?php echo $map['html']; ?>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->







            </article>

            <article class="col-sm-12 col-md-12 col-lg-6">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-custombutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Proje Ekle </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <form id="order-form" class="smart-form" novalidate="novalidate">

                                <p class="alert alert-danger"> <strong><i class="fa fa-check"></i> Uyarı :</strong> Konum bilgisi için haritayı kullanın. </p>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-map-marker"></i>
                                                <input type="text" readonly id="us2-lat" name="enlem" placeholder="Enlem">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-map-marker"></i>
                                                <input type="text" readonly name="boylam" id="us2-lon" placeholder="Boylam">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-building"></i>
                                                <input type="text" name="proje" id="us2-address" placeholder="Proje Adı">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-building"></i>
                                                <input type="text" name="projesahip" placeholder="Proje Sahibi Kuruluş">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="baslangic" id="startdate" placeholder="Proje Başlangıç Tarihi">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="bitis" id="finishdate" placeholder="Proje Bitiş Tarihi">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="select">
                                                <select name="durum">
                                                    <option value="0" selected="" disabled="">Proje Durumu</option>
                                                    <option value="1">İhalesi Yapıldı</option>
                                                    <option value="1">Devam Ediyor</option>
                                                    <option value="2">Bitti</option>
                                                </select> <i></i> </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="date" id="date" placeholder="İhale Tarihi">
                                            </label>

                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input">
                                                <input type="text" name="nakdi" placeholder="Nakdi Gerçekleşme Oranı" data-mask="999">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input">
                                                <input type="text" name="fiziki" placeholder="Fiziki Gerçekleşme Oranı" data-mask="999">
                                            </label>
                                        </section>
                                    </div>


                                    <section>
                                        <div class="input input-file">
                                            <span class="button"><input id="file2" type="file" name="file2" onchange="this.parentNode.nextSibling.value = this.value">Gözat</span><input type="text" placeholder="Proje Resmi" readonly="">
                                        </div>
                                    </section>

                                    <section>
                                        <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                            <textarea rows="5" name="tanitim" placeholder="Proje Tanıtımı"></textarea>
                                        </label>
                                    </section>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Proje Ekle
                                    </button>
                                </footer>
                            </form>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>


        </div>
    </div>
</div>

<script src='https://maps.google.com/maps/api/js?sensor=true&libraries=places'></script>
<script src='https://cdn.rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.min.js'></script>


<script>
    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();
        var errorClass = 'invalid';
        var errorElement = 'em';

        var $orderForm = $("#order-form").validate({
            errorClass		: errorClass,
            errorElement	: errorElement,
            highlight: function(element) {
                $(element).parent().removeClass('state-success').addClass("state-error");
                $(element).removeClass('valid');
            },
            unhighlight: function(element) {
                $(element).parent().removeClass("state-error").addClass('state-success');
                $(element).addClass('valid');
            },
            // Rules for form validation
            rules : {
                enlem : {
                    required : true
                },
                boylam : {
                    required : true
                },
                proje : {
                    required : true
                },
                projesahip : {
                    required : true
                },
                baslangic : {
                    required : true
                },
                bitis : {
                    required : true
                },
                durum : {
                    required : true
                },
                date : {
                    required : true
                },
                nakdi : {
                    required : true
                },
                fiziki : {
                    required : true
                },
                tanitim : {
                    required : true
                }
            },

            // Messages for form validation
            messages : {
                enlem : {
                    required : 'Enlem bilgisi giriniz.'
                },
                boylam : {
                    required : 'Boylam bilgisi giriniz.'
                },
                proje : {
                    required : 'Proje ismini yazınız.'
                },
                projesahip : {
                    required : 'Proje Sahibi kuruluşu yazınız.'
                },
                baslangic : {
                    required : 'Proje başlangıç tarihi giriniz.'
                },
                bitis : {
                    required : 'Proje bitiş tarihi giriniz.'
                },
                durum : {
                    required : 'Proje durumu seçiniz.'
                },
                date : {
                    required : 'İhale tarihi giriniz.'
                },
                nakdi : {
                    required : 'Nakdi Gerçekleşme Oranı giriniz.'
                },
                fiziki : {
                    required : 'Fiziki Gerçekleşme Oranı Giriniz.'
                },
                tanitim : {
                    required : 'Proje tanıtımı giriniz.'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        // START AND FINISH DATE
        $('#date').datepicker({
            dateFormat : 'dd.mm.yy',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#date').datepicker('option', selectedDate);
            }
        });

        $('#startdate').datepicker({
            dateFormat : 'dd.mm.yy',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#finishdate').datepicker('option', 'minDate', selectedDate);
            }
        });

        $('#finishdate').datepicker({
            dateFormat : 'dd.mm.yy',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#startdate').datepicker('option', 'maxDate', selectedDate);
            }
        });

    })

</script>