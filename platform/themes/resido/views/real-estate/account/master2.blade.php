@php
    Theme::layout('account');
    $user = auth('account')->user();
@endphp
<section class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="filter_search_opt">
                    <a href="javascript:void(0);" class="open_search_menu">
                        {{ __('Dashboard Navigation') }}
                        <i class="ml-2 ti-menu"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">


            <div class="col-lg-12 col-md-12">
                @yield('content')
            </div>

        </div>
    </div>
</section>

@php ob_start(); @endphp
<!-- Put translation key to translate in VueJS -->
<script type="text/javascript">
    "use strict";
    window.trans = JSON.parse('{!! addslashes(json_encode(trans('plugins/real-estate::dashboard'))) !!}');
    var BotbleVariables = BotbleVariables || {};
    BotbleVariables.languages = {
        tables: {!! json_encode(trans('core/base::tables'), JSON_HEX_APOS) !!},
        notices_msg: {!! json_encode(trans('core/base::notices'), JSON_HEX_APOS) !!},
        pagination: {!! json_encode(trans('pagination'), JSON_HEX_APOS) !!},
        system: {
            'character_remain': '{{ trans('core/base::forms.character_remain') }}'
        }
    };
    var RV_MEDIA_URL = {'media_upload_from_editor': '{{ route('public.account.upload-from-editor') }}'};
</script>
@stack('header')
@php $masterHeaderScript = ob_get_clean(); @endphp

@php ob_start(); @endphp
{!! Assets::renderFooter() !!}
@stack('scripts')
@stack('footer')
@php $masterFooterScript = ob_get_clean(); @endphp

@php
    Theme::asset()->container('footer')->usePath(false)->add('lodash-js', asset('vendor/core/core/media/libraries/lodash/lodash.min.js'));
    Theme::asset()->usePath(false)->add('real-estate-app_custom-css', asset('vendor/core/plugins/real-estate/css/app_custom.css'));
    Theme::asset()->container('header')->writeContent('master-header-js', $masterHeaderScript);
    Theme::asset()->container('footer')->writeContent('master-footer-js', "<script> 'use strict'; $(document).ready(function () { $('#preloader').remove(); })</script>" . $masterFooterScript);
    Theme::asset()->container('footer')->usePath()->remove('components-js');
@endphp
