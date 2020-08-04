@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">KYC</a>
                </li>
                <li>
                    <a href="#">KYC </a>
                </li>
                <li class="active">KYC</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
             
                    <small>
                        <i class="fa fa-angle-right"></i>
                
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/Branch">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>

   <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <h5 class="row-title before-themeprimary"><i class="fa  fa-arrow-circle-o-right themeprimary"></i>Wired Wizard</h5>
                            <div id="WiredWizard" class="wizard wizard-wired" data-target="#WiredWizardsteps">
                                <ul class="steps">
                                    <li data-target="#wiredstep1" class="active"><span class="step">1</span><span class="title">Step 1</span><span class="chevron"></span></li>
                                    <li data-target="#wiredstep2"><span class="step">2</span><span class="title">Step 2</span> <span class="chevron"></span></li>
                                    <li data-target="#wiredstep3"><span class="step">3</span><span class="title">Step 3</span> <span class="chevron"></span></li>
                                    <li data-target="#wiredstep4"><span class="step">4</span><span class="title">Step 4</span> <span class="chevron"></span></li>
                                    <li data-target="#wiredstep5"><span class="step">5</span><span class="title">Step 5</span> <span class="chevron"></span></li>
                                </ul>

                            </div>
                            <div class="step-content" id="WiredWizardsteps">
                                <div class="step-pane active" id="wiredstep1">This is step 1</div>
                                <div class="step-pane" id="wiredstep2">This is step 2</div>
                                <div class="step-pane" id="wiredstep3">This is step 3</div>
                                <div class="step-pane" id="wiredstep4">This is step 4</div>
                                <div class="step-pane" id="wiredstep5">This is step 5</div>
                            </div>
                            <div class="actions actions-footer" id="WiredWizard-actions">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm btn-prev"> <i class="fa fa-angle-left"></i>Prev</button>
                                    <button type="button" class="btn btn-default btn-sm btn-next" data-last="Finish">Next<i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>





        <!-- /Page Header -->
        <!-- Page Body -->

    </div>
@endsection
@extends('layouts.ThemeSource.footer')
@section('js')
    <script>

  $(document).ready(function () {
            $('#simplewizardinwidget').wizard();
            $('#simplewizard').wizard();
            $('#tabbedwizard').wizard().on('finished', function (e) {
                Notify('Thank You! All of your information saved successfully.', 'bottom-right', '5000', 'blue', 'fa-check', true);
            });
            $('#WiredWizard').wizard();
        });
        </script>