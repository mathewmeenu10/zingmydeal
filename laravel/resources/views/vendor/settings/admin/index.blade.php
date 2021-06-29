<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('settings::setting.name') !!} <small> {!! trans('app.manage') !!} {!! trans('settings::setting.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('settings::setting.names') !!}</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">{{trans('settings::setting.title.general')}}</h3>
                    </div>
                      <ul class="nav nav-stacked">
                        <li><a  href='{{guard_url('settings/main')}}' data-href="{{guard_url('settings/main')}}" data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.main')}}</a></li> 
                         
                        <li><a href='{{guard_url('settings/company')}}' data-href="{{guard_url('settings/company')}}" data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.company')}}</a></li> 

                        <li><a href='{{guard_url('settings/theme')}}' data-href="{{guard_url('settings/theme')}}" data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.theme')}}</a></li>  
                      </ul>
                    <div class="box-header with-border">
                      <h3 class="box-title">{{trans('settings::setting.title.subscription')}}</h3>
                    </div>
                      <ul class="nav nav-stacked">
                        <li><a href='{{guard_url('settings/social')}}' data-href="{{guard_url('settings/social')}}"
                                data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.team')}}</a></li>
                        <li><a href='{{guard_url('settings/social')}}' data-href="{{guard_url('settings/social')}}"
                                data-action='LOAD'
                                data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.subscriptions')}}</a>
                                </li>
                      </ul>

                    <div class="box-header with-border">
                      <h3 class="box-title">{{trans('settings::setting.title.integration')}}</h3>
                    </div>
                      <ul class="nav nav-stacked">
                        <li><a href='{{guard_url('settings/social')}}' data-href="{{guard_url('settings/social')}}"
                            data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.social')}}</a></li>  
                        <li><a href='{{guard_url('settings/payment')}}' data-href="{{guard_url('settings/payment')}}"
                            data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.payment')}}</a></li>  
                        <li><a href='{{guard_url('settings/mail')}}' data-href="{{guard_url('settings/mail')}}"
                            data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.email')}}</a></li>
                        <li><a href='{{guard_url('settings/sms')}}' data-href="{{guard_url('settings/sms')}}"
                            data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.sms')}}</a></li>  
                        <li><a href='{{guard_url('settings/chat')}}' data-href="{{guard_url('settings/chat')}}"
                            data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.chat')}}</a></li>  
                        <li><a href='{{guard_url('settings/google')}}' data-href="{{guard_url('settings/google')}}"
                            data-action='LOAD' data-load-to='#settings-setting-entry'>{{trans('settings::setting.title.google')}}</a></li>  
                      </ul>
                      <div class="box-footer">
                      </div>
                </div>
          </div>
            <div class="col-md-9">
                <!-- Main content -->
                    <div class="nav-tabs-custom">
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs primary">
                            <li class="active"><a href="#main" data-toggle="tab">{!! trans('settings::setting.name')
                                    !!}</a></li>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#settings-setting-create'  data-load-to='#settings-setting-entry'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                                <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-times-circle"></i> {{ trans('app.reset') }}</button>
                            </div>
                        </ul>
                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="settings-setting-entry">
                                @include('settings::partial.main')
                            </div>         
                        </div>
                    </div>

            </div>
        </div>
    </section>
</div>