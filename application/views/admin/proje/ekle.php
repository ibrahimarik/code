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
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    <?=strtoupper($this->uri->segment(2))?>
                    <span>>
                        <?=mb_convert_case(mb_strtolower($this->uri->segment(3)), MB_CASE_TITLE, "UTF-8")?>
							</span>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <ul id="sparks" class="">
                    <li class="sparks-info">
                        <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                        <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                            1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                        <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                        <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                </ul>
            </div>
        </div>


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

                            <form id="order-form" class="smart-form" novalidate="novalidate" action="<?php echo site_url('yonetim/proje/ekle')?>" method="post" enctype="multipart/form-data">
                                <?php
                                if($flash_message)
                                {
                                    if($flash_message == TRUE)
                                    {
                                        echo '<p class="alert alert-success"> <strong><i class="fa fa-check"></i> BAŞARILI. :</strong> '.$mesaj.' </p>';
                                    }else{
                                        echo '<p class="alert alert-danger"> <strong><i class="fa fa-check"></i> HATA! :</strong> '.$mesaj.' </p>';
                                    }
                                }
                                else
                                {
                                    echo '<p class="alert alert-info"> <strong><i class="fa fa-info"></i> Uyarı :</strong> '.$mesaj.' </p>';
                                }
                                ?>
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-map-marker"></i>
                                                <input type="text" id="us2-lat" name="enlem" placeholder="Enlem" readonly>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-map-marker"></i>
                                                <input type="text" name="boylam" id="us2-lon" placeholder="Boylam" readonly>
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
                                                    <?php $query = $this->db->query("select * from durum order by id ASC");
                                                    foreach($query->result_array() as $row): ?>
                                                        <option value="1"><?=$row["durum"]?></option>
                                                    <?php endforeach; ?>
                                                </select> <i></i> </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="tarih" id="date" placeholder="İhale Tarihi">
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

                                    <div class="row">
                                        <section class="col col-10">
                                            <label class="input">
                                                <div class="input input-file">
                                                    <span class="button"><input type="file" name="userfile" onchange="this.parentNode.nextSibling.value = this.value">Gözat</span><input type="text" placeholder="Proje Resmi" readonly="">
                                                </div>
                                            </label>
                                        </section>
                                    </div>


                                    <section>
                                        <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                            <textarea rows="5" name="tanitim" placeholder="Proje Tanıtımı"></textarea>
                                        </label>
                                    </section>
                                </fieldset>
                                <footer>
                                    <input type="submit" class="btn btn-primary" id="sbmt" name="ekle" value="Proje Ekle">
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
                tarih : {
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
                tarih : {
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
            dateFormat : 'yy-mm-dd',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#date').datepicker('option', selectedDate);
            }
        });

        $('#startdate').datepicker({
            dateFormat : 'yy-mm-dd',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#finishdate').datepicker('option', 'minDate', selectedDate);
            }
        });

        $('#finishdate').datepicker({
            dateFormat : 'yy-mm-dd',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#startdate').datepicker('option', 'maxDate', selectedDate);
            }
        });

    })

</script>