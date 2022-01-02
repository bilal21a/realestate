<div class="widget meta-boxes form-actions form-actions-default action-{{ $direction ?? 'horizontal' }}">


    @if (auth('account')->user()->email == 'demo@makhdom.mk')


    <div class="error_msg" style="color:#4F8A10;background-color:#DFF2BF;padding: 3px 10px; display:none;">

    </div>


    <div class="quick_login" style="margin-bottom:3rem; display:none">
        <div class="widget-title">
            <h4>
                <span>@lang('plugins/real-estate::property.form.quick_login')</span>
                {{-- Quick Login --}}
            </h4>
        </div>

        <div class="form-group mb-3">
            <label for="name" class="control-label required" aria-required="true">@lang('plugins/real-estate::property.form.name_quick_login')</label>
            <input class="form-control" placeholder="@lang('plugins/real-estate::property.form.name_quick_login')"  name="name_login" type="text" id="name_login">
        </div>
        <div class="form-group mb-3">
            <label for="name" class="control-label required" aria-required="true">@lang('plugins/real-estate::property.form.email_quick_login')</label>
            <input class="form-control" placeholder="@lang('plugins/real-estate::property.form.email_quick_login')"  name="email_login" type="email" id="email_login">
        </div>
        <div class="form-group mb-3">
            <label for="name" class="control-label required" aria-required="true">@lang('plugins/real-estate::property.form.phone_quick_login')</label>
            <input class="form-control" placeholder="@lang('plugins/real-estate::property.form.phone_quick_login')" name="phone_login" type="text" id="phone_login">
        </div>
        <button type="button"  class="btn btn-sm btn-info login_save">
            <i class="fas fa-sign-in-alt"></i> @lang('plugins/real-estate::property.form.publish_quick_login')
        </button>
    </div>


    <div class="real_save" style="display:none;">
        <div class="widget-title">
            <h4>
                @if (isset($icon) && !empty($icon))
                    <i class="{{ $icon }}"></i>
                @endif
                <span>{{ isset($title) ? $title : apply_filters(BASE_ACTION_FORM_ACTIONS_TITLE, trans('core/base::forms.publish')) }}</span>
            </h4>
        </div>
        <div class="widget-body">
            <div class="btn-set">
                @php do_action(BASE_ACTION_FORM_ACTIONS, 'default') @endphp
                <button type="submit" name="submit" value="save" class="btn btn-sm btn-info real_save_btn">
                    <i class="fa fa-save"></i> {{ trans('core/base::forms.save') }}
                </button>
                @if (!isset($only_save) || $only_save == false)
                    &nbsp;
                    <button type="submit" name="submit" value="apply" class="btn btn-sm btn-success">
                        <i class="fa fa-check-circle"></i> {{ trans('core/base::forms.save_and_continue') }}
                    </button>
                @endif
            </div>
        </div>
    </div>

    <div class="fake_save">
        <div class="widget-title">
            <h4>
                @if (isset($icon) && !empty($icon))
                    <i class="{{ $icon }}"></i>
                @endif
                <span>{{ isset($title) ? $title : apply_filters(BASE_ACTION_FORM_ACTIONS_TITLE, trans('core/base::forms.publish')) }}</span>
            </h4>
        </div>
        <div class="widget-body">
            <div class="btn-set">
                @php do_action(BASE_ACTION_FORM_ACTIONS, 'default') @endphp
                <button type="button" name="submit" value="save" class="btn btn-sm btn-info fake_save_btn">
                    <i class="fa fa-save"></i> {{ trans('core/base::forms.save') }}
                </button>
                @if (!isset($only_save) || $only_save == false)
                    &nbsp;
                    <button type="button" name="submit" value="apply" class="btn btn-sm btn-success fake_save_btn">
                        <i class="fa fa-check-circle"></i> {{ trans('core/base::forms.save_and_continue') }}
                    </button>
                @endif
            </div>
        </div>
    </div>
    {{--------------------- else ------------------------}}
    @else

    <div class="widget-title">
        <h4>
            @if (isset($icon) && !empty($icon))
                <i class="{{ $icon }}"></i>
            @endif
            <span>{{ isset($title) ? $title : apply_filters(BASE_ACTION_FORM_ACTIONS_TITLE, trans('core/base::forms.publish')) }}</span>
        </h4>
    </div>
    <div class="widget-body">
        <div class="btn-set">
            @php do_action(BASE_ACTION_FORM_ACTIONS, 'default') @endphp
            <button type="submit" name="submit" value="save" class="btn btn-sm btn-info">
                <i class="fa fa-save"></i> {{ trans('core/base::forms.save') }}
            </button>
            @if (!isset($only_save) || $only_save == false)
                &nbsp;
                <button type="submit" name="submit" value="apply" class="btn btn-sm btn-success">
                    <i class="fa fa-check-circle"></i> {{ trans('core/base::forms.save_and_continue') }}
                </button>
            @endif
        </div>
    </div>

    @endif






</div>
