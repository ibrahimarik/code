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
                            <div id="us2" style="width: 100%; height: 515px;"></div>

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
                        <h2>Registration form </h2>

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
                                <header>
                                    Order services
                                </header>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                                <input type="text" readonly id="us2-lat" name="enlem" placeholder="Enlem">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-briefcase"></i>
                                                <input type="text" readonly name="boylam" id="us2-lon" placeholder="Boylam">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                                <input type="text" name="adres" id="us2-address" placeholder="Adres">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-phone"></i>
                                                <input type="tel" name="phone" placeholder="Phone" data-mask="(999) 999-9999">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="select">
                                                <select name="interested">
                                                    <option value="0" selected="" disabled="">Interested in</option>
                                                    <option value="1">design</option>
                                                    <option value="1">development</option>
                                                    <option value="2">illustration</option>
                                                    <option value="2">branding</option>
                                                    <option value="3">video</option>
                                                </select> <i></i> </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="select">
                                                <select name="budget">
                                                    <option value="0" selected="" disabled="">Budget</option>
                                                    <option value="1">less than 5000$</option>
                                                    <option value="2">5000$ - 10000$</option>
                                                    <option value="3">10000$ - 20000$</option>
                                                    <option value="4">more than 20000$</option>
                                                </select> <i></i> </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="startdate" id="startdate" placeholder="Expected start date">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="finishdate" id="finishdate" placeholder="Expected finish date">
                                            </label>
                                        </section>
                                    </div>

                                    <section>
                                        <div class="input input-file">
                                            <span class="button"><input id="file2" type="file" name="file2" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
                                        </div>
                                    </section>

                                    <section>
                                        <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                            <textarea rows="5" name="comment" placeholder="Tell us about your project"></textarea>
                                        </label>
                                    </section>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Validate Form
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
                email : {
                    required : true,
                    email : true
                },
                phone : {
                    required : true
                },
                interested : {
                    required : true
                },
                budget : {
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
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                phone : {
                    required : 'Please enter your phone number'
                },
                interested : {
                    required : 'Please select interested service'
                },
                budget : {
                    required : 'Please select your budget'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        // START AND FINISH DATE
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