              {!!Form::vertical_open()
              ->id('settings-setting-create')
              ->method('POST')
              ->files('true')
              ->action(guard_url('settings/main'))!!}
              <div class='row'>
                <div class='col-md-12 col-sm-12'>
                       <div class="row">
                         <div class="col-md-8"> 
                           {!! Form::text('env[APP_NAME]')
                           -> label(trans('settings::setting.label.name'))
                           -> value(env('APP_NAME'))
                           -> placeholder(trans('settings::setting.placeholder.name'))!!}
                         </div>
                         <div class="col-md-4"> 
                           {!! Form::select('settings[main.theme]')
                           -> label(__('settings::setting.label.theme.name'))
                           -> options(__('settings::setting.options.theme'), setting('theme'))
                           -> placeholder(__('settings::setting.placeholder.theme'))!!}
                          </div>
                       </div>  

                       <div class="row">
                         <div class="col-md-6"> 
                         {!! Form::text('settings[main.google.analytics]')
                         -> label(trans('settings::setting.label.google.analytics'))
                         -> value(setting('main.google.analytics'))
                         -> placeholder(trans('settings::setting.placeholder.google.analytics'))!!}
                        </div>
                         <div class="col-md-6"> 
                         {!! Form::text('settings[main.google.recaptcha]')
                         -> label(trans('settings::setting.label.google.recaptcha'))
                         -> value(setting('main.google.recaptcha'))
                         -> placeholder(trans('settings::setting.placeholder.google.recaptcha'))!!}
                        </div>
                      </div>
                       <div class="row">

                         <div class="col-md-4"> 
                       {!! Form::select('settings[main.dateformat]')
                       -> label(trans('settings::setting.label.dateformat'))
                       -> options(trans('settings::setting.options.dateformat'), setting('main.dateformat'))
                       -> placeholder(trans('settings::setting.placeholder.dateformat'))!!}
                        </div>

                         <div class="col-md-4"> 
                       {!! Form::select('settings[main.timeformat]')
                       -> label(trans('settings::setting.label.timeformat'))
                       -> options(trans('settings::setting.options.timeformat'), setting('main.timeformat'))
                       -> placeholder(trans('settings::setting.placeholder.timeformat'))!!}
                        </div>
                         <div class="col-md-4"> 
                       {!! Form::select('settings[main.timezone]')
                       -> label(trans('settings::setting.label.timezone'))
                       -> options(DateTimeZone::listIdentifiers(DateTimeZone::ALL), setting('main.timezone'))
                       -> placeholder(trans('settings::setting.placeholder.timezone'))!!}
                        </div>
                      </div>
                      <fieldset>
                        <legend>{{trans('settings::setting.label.currency.heading')}}</legend>
                      <div class="row clearfix">

                        <div class="col-md-8">
                         {!! Form::select('settings[main.currency.currency]')
                         -> label(trans('settings::setting.label.currency.currency'))
                         -> options(trans('settings::setting.options.currency.currency'), setting('main.currency.currency'))
                         -> placeholder(trans('settings::setting.placeholder.currency.currency'))!!}
                        </div>

                        <div class="col-md-4">
                         {!! Form::select('settings[main.currency.position]')
                         -> label(trans('settings::setting.label.currency.position'))
                         -> options(trans('settings::setting.options.currency.position'), setting('main.currency.position'))
                         -> placeholder(trans('settings::setting.placeholder.currency.position'))!!}
                        </div>

                        <div class="col-md-4">
                         {!! Form::text('settings[main.currency.thousandseperator]')
                         -> label(trans('settings::setting.label.currency.thousandseperator'))
                         -> value(setting('main.currency.thousandseperator'))
                         -> placeholder(trans('settings::setting.placeholder.currency.thousandseperator'))!!}
                        </div>

                        <div class="col-md-4">
                         {!! Form::text('settings[main.currency.decimalseperator]')
                         -> label(trans('settings::setting.label.currency.decimalseperator'))
                         -> value(setting('main.currency.decimalseperator'))
                         -> placeholder(trans('settings::setting.placeholder.currency.decimalseperator'))!!}
                        </div>

                        <div class="col-md-4">
                         {!! Form::text('settings[main.currency.decimal]')
                         -> label(trans('settings::setting.label.currency.decimal'))
                         -> value(setting('main.currency.decimal'))
                         -> placeholder(trans('settings::setting.placeholder.currency.decimal'))!!}
                        </div>

                    </div>
                      </fieldset>
                  </div>
            </div>
            {!! Form::close() !!}
            