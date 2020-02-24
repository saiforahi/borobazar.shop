@extends('layouts.app')

@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
                <h4>নিবন্ধন</h4>
                <ul>
                    <li><a href="#">হোম</li></a>
                    <i class="fs-14 fa fa-angle-right"></i>
                    <li><a href="{{ route('register') }}">নিবন্ধন</li></a>
                </ul>
                </div>
        </div>
    </div>
</section>
<section class="register-area pt-5 pb-5">
    <div id="registration_page" class="container-fluid">
        <div class="container">
            <div class="register-inner">
                <!--@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--> 
                <form class="row" action="{{ route('register') }}" method="POST">
                @csrf
                    <div class="col-lg-6 form-group">
                        <lebel for="firstName">নামের প্রথম অংশ *</lebel>
                        <input type="text" class="form-control2 @error('firstName') is-invalid @enderror" placeholder="" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
                        @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <lebel for="lastName">নামের শেষ অংশ</lebel>
                        <input type="text" class="form-control2 @error('lastName') is-invalid @enderror" placeholder="" id="lastName" name="lastName" value="{{ old('lastName') }}">
                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <lebel for="username">ইমেইল / মোবাইল*</lebel>
                        <input type="text" class="form-control2 @error('username') is-invalid @enderror" placeholder="" id="email" name="username" required value="{{ old('username') }}">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="presentDistrict">বসবাসরত জেলা *</label>
                        <select class="form-control2 search-blood search-select" id="presentDistrict" name="presentDistrict" required value="{{ old('presentDistrict') }}">
                            <option value='1'>ব্রাক্ষ্মণবাড়িয়া</option>
                            <option value='2'>বাগেরহাট</option>
                            <option value='3'>বান্দরবান</option>
                            <option value='4'>বরিশাল</option>
                            <option value='5'>ভোলা</option>
                            <option value='6' Selected>বগুড়া</option>
                            <option value='7'>বরগুনা</option>
                            <option value='8'>চাঁদপুর</option>
                            <option value='9'>চাঁপাইনবাবগঞ্জ</option>
                            <option value='10'>চট্টগ্রাম</option>
                            <option value='11'>চুয়াডাঙ্গা</option>
                            <option value='12'>কুমিল্লা</option>
                            <option value='13'>কক্সবাজার</option>
                            <option value='14'>ঢাকা</option>
                            <option value='15'>দিনাজপুর</option>
                            <option value='16'>ফরিদপুর</option>
                            <option value='17'>ফেনী</option>
                            <option value='18'>গাইবান্ধা</option>
                            <option value='19'>গাজীপুর</option>
                            <option value='20'>গোপালগঞ্জ</option>
                            <option value='21'>হবিগঞ্জ</option>
                            <option value='22'>জামালপুর</option>
                            <option value='23'>যশোর</option>
                            <option value='24'>ঝালকাঠী</option>
                            <option value='25'>ঝিনাইদহ</option>
                            <option value='26'>জয়পুরহাট</option>
                            <option value='27'>খাগড়াছড়ি</option>
                            <option value='28'>খুলনা</option>
                            <option value='29'>কিশোরগঞ্জ</option>
                            <option value='30'>কুড়িগ্রাম</option>
                            <option value='31'>কুষ্টিয়া</option>
                            <option value='32'>লালমনিরহাট</option>
                            <option value='33'>লক্ষ্মীপুর</option>
                            <option value='34'>মাদারীপুর</option>
                            <option value='35'>মাগুরা</option>
                            <option value='36'>মানিকগঞ্জ</option>
                            <option value='37'>মেহেরপুর</option>
                            <option value='38'>মৌলভীবাজার</option>
                            <option value='39'>মুন্সীগঞ্জ</option>
                            <option value='40'>ময়মনসিংহ</option>
                            <option value='41'>নওগাঁ</option>
                            <option value='42'>নড়াইল</option>
                            <option value='43'>নারায়নগঞ্জ</option>
                            <option value='44'>নরসিংদী</option>
                            <option value='45'>নাটোর</option>
                            <option value='46'>নেত্রকোণা</option>
                            <option value='47'>নীলফামারী</option>
                            <option value='48'>নোয়াখালী</option>
                            <option value='49'>পাবনা</option>
                            <option value='50'>পঞ্চগড়</option>
                            <option value='51'>পটুয়াখালী</option>
                            <option value='52'>পিরোজপুর</option>
                            <option value='53'>রাজবাড়ী</option>
                            <option value='54'>রাজশাহী</option>
                            <option value='55'>রাঙ্গামাটি</option>
                            <option value='56'>রংপুর</option>
                            <option value='57'>সাতক্ষীরা</option>
                            <option value='58'>শরিয়তপুর</option>
                            <option value='59'>শেরপুর</option>
                            <option value='60'>সিরাজগঞ্জ</option>
                            <option value='61'>সুনামগঞ্জ</option>
                            <option value='62'>সিলেট</option>
                            <option value='63'>টাঙ্গাইল</option>
                            <option value='64'>ঠাকুরগাঁও</option>
                        </select>
                        @error('presentDistrict')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="password">পাসওয়ার্ড *</label>
                        <input :type="passwordFieldType" v-model="password" class="form-control2 @error('password') is-invalid @enderror" placeholder="" id="password" name="password" required >
                        <span @click="switchVisibility_password" id="switch_password" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="password_confirmation">পাসওয়ার্ড নিশ্চিত করুন *</label>
                        <input :type="confirmed_passwordFieldType" v-model="confirmed_password" class="form-control2" placeholder="" id="password_confirmation" name="password_confirmation" required>
                        <span @click="switchVisibility_confirm" id="switch_confirm" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                    </div>
                    <div class="col-md-12">
                        <!--wants-to-be-donar :wantsToBeDonar="{!! json_encode(session('wantsToBeDonar')); !!}"></wants-to-be-donar-->
                        
                        <div class="form-group">
                            @if(old('blood_registration')==true)
                            <input type="checkbox" class="check" id="bldReg" name="blood_registration" onclick="showHidebldreg()" checked>
                            @else
                            <input type="checkbox" class="check" id="bldReg" name="blood_registration" onclick="showHidebldreg()">
                            @endif
                            <label for="text">বড়বাজার রক্ত দান স্বেচ্ছাসেবী সেবায় সংযুক্ত হতে</label>
                        </div>
                        
                        @if(old('blood_registration')==true)
                        <div class="bldreg" id="bldregInfo" style="display: block;">
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="bloodGroup">রক্তের গ্রুপ *</label>
                                <select class="form-control2 search-blood @error('bloodGroup') is-invalid @enderror" id="bloodGroup" name="bloodGroup" value="{{ old('bloodGroup') }}">
                                    <option selected="select"value="1">এ+ (পজিটিভ)</option>
                                    <option value="2">এ- (নেগেটিভ)</option>
                                    <option value="3">বি+ (পজিটিভ)</option>
                                    <option value="4">বি- (নেগেটিভ)</option>
                                    <option value="5">ও+ (পজিটিভ)</option>
                                    <option value="6">ও- (নেগেটিভ)</option>
                                    <option value="7">এবি+ (পজিটিভ)</option>
                                    <option value="8">এবি- (নেগেটিভ)</option>
                                </select>
                                @error('bloodGroup')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="lastDonationDate">শেষবার রক্ত দানের তারিখ *</label>
                                <input type="text" class="form-control2 @error('lastDonationDate') is-invalid @enderror" placeholder="" id="lastDonationDate" name="lastDonationDate" value="{{ old('lastDonationDate') }}">
                                @error('lastDonationDate')
                                
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="organizationName">সংগঠনের নাম (আপনি যার সক্রিয় সদস্য)</label>
                                <input type="text" class="form-control2 " placeholder="উদাঃ রক্তের বন্ধন" id="text" name="organizationName">
                            </div>
                            </div>
                        </div>
                        @else
                        <div class="bldreg" id="bldregInfo" style="display: none;">
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="bloodGroup">রক্তের গ্রুপ *</label>
                                <select class="form-control2 search-blood @error('bloodGroup') is-invalid @enderror" id="bloodGroup" name="bloodGroup" value="{{ old('bloodGroup') }}">
                                    <option selected="select"value="1">এ+ (পজিটিভ)</option>
                                    <option value="2">এ- (নেগেটিভ)</option>
                                    <option value="3">বি+ (পজিটিভ)</option>
                                    <option value="4">বি- (নেগেটিভ)</option>
                                    <option value="5">ও+ (পজিটিভ)</option>
                                    <option value="6">ও- (নেগেটিভ)</option>
                                    <option value="7">এবি+ (পজিটিভ)</option>
                                    <option value="8">এবি- (নেগেটিভ)</option>
                                </select>
                                    @error('bloodGroup')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="lastDonationDate">শেষবার রক্ত দানের তারিখ *</label>
                                    <input type="date" class="form-control2 @error('lastDonationDate') is-invalid @enderror" placeholder="" id="lastDonationDate" name="lastDonationDate" value="{{ old('lastDonationDate') }}">
                                    
                                    @error('lastDonationDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="organizationName">সংগঠনের নাম (আপনি যার সক্রিয় সদস্য)</label>
                                    <input type="text" class="form-control2 " placeholder="উদাঃ রক্তের বন্ধন" id="text" name="organizationName">
                                </div>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                    <div class="col-lg-12 form-group">
                        <p class="trmdpcp">By clicking Sign Up, you agree to our <a href="#" id="terms-link" target="_blank" rel="nofollow">Terms</a>, <a href="#" id="privacy-link" target="_blank" rel="nofollow">Data Policy</a> and <a href="#" id="cookie-use-link" target="_blank" rel="nofollow">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
                    </div>
                    <div class="col-lg-6 form-group">
                        <button type="submit" value="submit" class="btn-getinvite" id="submit" name="submit">নিবন্ধন করুন</button>
                    </div>
                </form>
                <div class="row text-right">
                    <div class="col-lg-12">
                        <small class="already">আপনি কি নিবন্ধিত?</small>
                        <span class="login"><a href="{{route('login')}}">লগইন করুন</a></span
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection

@section('js-part')
    <!--showhide-->   
    <script>
        function showHidebldreg() {
            if(document.getElementById('bldReg').checked) {
                document.getElementById('bldregInfo').style.display='block';  
            } else {
                document.getElementById('bldregInfo').style.display='none'; 
            }
            
            
        }
    </script>
    
    <!--end showhide-->
    <script>
        $(function() {
          $('input[name="lastDonationDate"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10)
          }, function(start, end, label) {
            var years = moment().diff(start, 'years');
          });
        });
    </script>
    <script>
        //search-district
     $(function(){ $('.search-select').comboSelect() });
    
    
    $(function (factory) {
        'use strict';
        if (typeof define === 'function' && define.amd) {
            // AMD. Register as an anonymous module.
            define(['jquery'], factory);
        } else if (typeof exports === 'object' && typeof require === 'function') {
            // Browserify
            factory(require('jquery'));
        } else {
            // Browser globals
            factory(jQuery);
        }
    }
    $(function ( $, undefined ) {
    
        var pluginName = "comboSelect",
            dataKey = 'comboselect';
        var defaults = {
            comboClass         : 'combo-select',
            comboArrowClass    : 'combo-arrow',
            comboDropDownClass : 'combo-dropdown',
            inputClass         : 'combo-input text-input',
            disabledClass      : 'option-disabled',
            hoverClass         : 'option-hover',
            selectedClass      : 'option-selected',
            markerClass        : 'combo-marker',
            themeClass         : '',
            maxHeight          : 200,
            extendStyle        : true,
            focusInput         : true
        };
    
        /**
         * Utility functions
         */
    
        var keys = {
            ESC: 27,
            TAB: 9,
            RETURN: 13,
            LEFT: 37,
            UP: 38,
            RIGHT: 39,
            DOWN: 40,
            ENTER: 13,
            SHIFT: 16
        },
        isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
    
        /**
         * Constructor
         * @param {[Node]} element [Select element]
         * @param {[Object]} options [Option object]
         */
        function Plugin ( element, options ) {
    
            /* Name of the plugin */
    
            this._name = pluginName;
    
            /* Reverse lookup */
    
            this.el = element
    
            /* Element */
    
            this.$el = $(element)
    
            /* If multiple select: stop */
    
            if(this.$el.prop('multiple')) return;
    
            /* Settings */
    
            this.settings = $.extend( {}, defaults, options, this.$el.data() );
    
            /* Defaults */
    
            this._defaults = defaults;
    
            /* Options */
    
            this.$options = this.$el.find('option, optgroup')
    
            /* Initialize */
    
            this.init();
    
            /* Instances */
    
            $.fn[ pluginName ].instances.push(this);
    
        }
    
        $.extend(Plugin.prototype, {
            init: function () {
    
                /* Construct the comboselect */
    
                this._construct();
    
    
                /* Add event bindings */
    
                this._events();
    
    
            },
            _construct: function(){
    
                var self = this
    
                /**
                 * Add negative TabIndex to `select`
                 * Preserves previous tabindex
                 */
    
                this.$el.data('plugin_'+ dataKey + '_tabindex', this.$el.prop('tabindex'))
    
                /* Add a tab index for desktop browsers */
    
                !isMobile && this.$el.prop("tabIndex", -1)
    
                /**
                 * Wrap the Select
                 */
    
                this.$container = this.$el.wrapAll('<div class="' + this.settings.comboClass + ' '+ this.settings.themeClass + '" />').parent();
    
                /**
                 * Check if select has a width attribute
                 */
                if(this.settings.extendStyle && this.$el.attr('style')){
    
                    this.$container.attr('style', this.$el.attr("style"))
    
                }
    
    
                /**
                 * Append dropdown arrow
                 */
    
                this.$arrow = $('<div class="'+ this.settings.comboArrowClass+ '" />').appendTo(this.$container)
    
    
                /**
                 * Append dropdown
                 */
    
                this.$dropdown = $('<ul class="'+this.settings.comboDropDownClass+'" />').appendTo(this.$container)
    
    
                /**
                 * Create dropdown options
                 */
    
                this._build();
    
                /**
                 * Append Input
                 */
    
                this.$input = $('<input type="text"' + (isMobile? 'tabindex="-1"': '') + ' placeholder="'+ this.getPlaceholder() +'" class="'+ this.settings.inputClass + '">').appendTo(this.$container)
    
                /* Update input text */
    
                this._updateInput()
    
            },
            getPlaceholder: function(){
    
                var p = '';
    
                this.$options.filter(function(idx, opt){
    
                    return opt.nodeName == 'OPTION'
                }).each(function(idx, e){
    
                    if(e.value == '') p = e.innerHTML
                });
    
                return p
            },
            _build: function(){
    
                var self = this;
    
                var o = '', k = 0;
    
                this.$options.each(function(i, e){
    
                    if(e.nodeName.toLowerCase() == 'optgroup'){
    
                        return o+='<li class="option-group">'+this.label+'</li>'
                    }
    
                    o+='<li class="'+(this.disabled? self.settings.disabledClass : "option-item") + ' ' +(k == self.$el.prop('selectedIndex')? self.settings.selectedClass : '')+ '" data-index="'+(k)+'" data-value="'+this.value+'">'+ (this.innerHTML) + '</li>'
    
                    k++;
                })
    
                this.$dropdown.html(o)
    
                /**
                 * Items
                 */
    
                this.$items = this.$dropdown.children();
            },
    
            _events: function(){
    
                /* Input: focus */
    
                this.$container.on('focus.input', 'input', $.proxy(this._focus, this))
    
                /**
                 * Input: mouseup
                 * For input select() event to function correctly
                 */
                this.$container.on('mouseup.input', 'input', function(e){
                    e.preventDefault()
                })
    
                /* Input: blur */
    
                this.$container.on('blur.input', 'input', $.proxy(this._blur, this))
    
                /* Select: change */
    
                this.$el.on('change.select', $.proxy(this._change, this))
    
                /* Select: focus */
    
                this.$el.on('focus.select', $.proxy(this._focus, this))
    
                /* Select: blur */
    
                this.$el.on('blur.select', $.proxy(this._blurSelect, this))
    
                /* Dropdown Arrow: click */
    
                this.$container.on('click.arrow', '.'+this.settings.comboArrowClass , $.proxy(this._toggle, this))
    
                /* Dropdown: close */
    
                this.$container.on('comboselect:close', $.proxy(this._close, this))
    
                /* Dropdown: open */
    
                this.$container.on('comboselect:open', $.proxy(this._open, this))
    
                /* Dropdown: update */
    
                this.$container.on('comboselect:update', $.proxy(this._update, this));
    
    
                /* HTML Click */
    
                $('html').off('click.comboselect').on('click.comboselect', function(){
    
                    $.each($.fn[ pluginName ].instances, function(i, plugin){
    
                        plugin.$container.trigger('comboselect:close')
    
                    })
                });
    
                /* Stop `event:click` bubbling */
    
                this.$container.on('click.comboselect', function(e){
                    e.stopPropagation();
                })
    
    
                /* Input: keydown */
    
                this.$container.on('keydown', 'input', $.proxy(this._keydown, this))
    
                /* Input: keyup */
    
                this.$container.on('keyup', 'input', $.proxy(this._keyup, this))
    
                /* Dropdown item: click */
    
                this.$container.on('click.item', '.option-item', $.proxy(this._select, this))
    
            },
    
            _keydown: function(event){
    
    
    
                switch(event.which){
    
                    case keys.UP:
                        this._move('up', event)
                        break;
    
                    case keys.DOWN:
                        this._move('down', event)
                        break;
    
                    case keys.TAB:
                        this._enter(event)
                        break;
    
                    case keys.RIGHT:
                        this._autofill(event);
                        break;
    
                    case keys.ENTER:
                        this._enter(event);
                        break;
    
                    default:
                        break;
    
    
                }
    
            },
    
    
            _keyup: function(event){
    
                switch(event.which){
                    case keys.ESC:
                        this.$container.trigger('comboselect:close')
                        break;
    
                    case keys.ENTER:
                    case keys.UP:
                    case keys.DOWN:
                    case keys.LEFT:
                    case keys.RIGHT:
                    case keys.TAB:
                    case keys.SHIFT:
                        break;
    
                    default:
                        this._filter(event.target.value)
                        break;
                }
            },
    
            _enter: function(event){
    
                var item = this._getHovered()
    
                item.length && this._select(item);
    
                /* Check if it enter key */
                if(event && event.which == keys.ENTER){
    
                    if(!item.length) {
    
                        /* Check if its illegal value */
    
                        this._blur();
    
                        return true;
                    }
    
                    event.preventDefault();
                }
    
    
            },
            _move: function(dir){
    
                var items = this._getVisible(),
                    current = this._getHovered(),
                    index = current.prevAll('.option-item').filter(':visible').length,
                    total = items.length
    
    
                switch(dir){
                    case 'up':
                        index--;
                        (index < 0) && (index = (total - 1));
                        break;
    
                    case 'down':
                        index++;
                        (index >= total) && (index = 0);
                        break;
                }
    
    
                items
                    .removeClass(this.settings.hoverClass)
                    .eq(index)
                    .addClass(this.settings.hoverClass)
    
    
                if(!this.opened) this.$container.trigger('comboselect:open');
    
                this._fixScroll()
            },
    
            _select: function(event){
    
                var item = event.currentTarget? $(event.currentTarget) : $(event);
    
                if(!item.length) return;
    
                /**
                 * 1. get Index
                 */
    
                var index = item.data('index');
    
                this._selectByIndex(index);
    
                //this.$container.trigger('comboselect:close')
    
                this.$input.focus();
    
                this.$container.trigger('comboselect:close');
    
            },
    
            _selectByIndex: function(index){
    
                /**
                 * Set selected index and trigger change
                 * @type {[type]}
                 */
                if(typeof index == 'undefined'){
    
                    index = 0
    
                }
    
                if(this.$el.prop('selectedIndex') != index){
    
                    this.$el.prop('selectedIndex', index).trigger('change');
                }
    
            },
    
            _autofill: function(){
    
                var item = this._getHovered();
    
                if(item.length){
    
                    var index = item.data('index')
    
                    this._selectByIndex(index)
    
                }
    
            },
    
    
            _filter: function(search){
    
                var self = this,
                    items = this._getAll();
                    needle = $.trim(search).toLowerCase(),
                    reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g'),
                    pattern = '(' + search.replace(reEscape, '\\$1') + ')';
    
    
                /**
                 * Unwrap all markers
                 */
    
                $('.'+self.settings.markerClass, items).contents().unwrap();
    
                /* Search */
    
                if(needle){
    
                    /* Hide Disabled and optgroups */
    
                    this.$items.filter('.option-group, .option-disabled').hide();
    
    
                    items
                        .hide()
                        .filter(function(){
    
                            var $this = $(this),
                                text = $.trim($this.text()).toLowerCase();
    
                            /* Found */
                            if(text.toString().indexOf(needle) != -1){
    
                                /**
                                 * Wrap the selection
                                 */
    
                                $this
                                    .html(function(index, oldhtml){
                                    return oldhtml.replace(new RegExp(pattern, 'gi'), '<span class="'+self.settings.markerClass+'">$1</span>')
                                })
    
                                return true
                            }
    
                        })
                        .show()
                }else{
    
    
                    this.$items.show();
                }
    
                /* Open the comboselect */
    
                this.$container.trigger('comboselect:open')
    
    
            },
    
            _highlight: function(){
    
                /*
                1. Check if there is a selected item
                2. Add hover class to it
                3. If not add hover class to first item
                */
    
                var visible = this._getVisible().removeClass(this.settings.hoverClass),
                    $selected = visible.filter('.'+this.settings.selectedClass)
    
                if($selected.length){
    
                    $selected.addClass(this.settings.hoverClass);
    
                }else{
    
                    visible
                        .removeClass(this.settings.hoverClass)
                        .first()
                        .addClass(this.settings.hoverClass)
                }
    
            },
    
            _updateInput: function(){
    
                var selected = this.$el.prop('selectedIndex')
    
                if(this.$el.val()){
    
                    text = this.$el.find('option').eq(selected).text()
    
                    this.$input.val(text)
    
                }else{
    
                    this.$input.val('')
    
                }
    
                return this._getAll()
                    .removeClass(this.settings.selectedClass)
                    .filter(function(){
    
                        return $(this).data('index') == selected
                    })
                    .addClass(this.settings.selectedClass)
    
            },
            _blurSelect: function(){
    
                this.$container.removeClass('combo-focus');
    
            },
            _focus: function(event){
    
                /* Toggle focus class */
    
                this.$container.toggleClass('combo-focus', !this.opened);
    
                /* If mobile: stop */
    
                if(isMobile) return;
    
                /* Open combo */
    
                if(!this.opened) this.$container.trigger('comboselect:open');
    
                /* Select the input */
    
                this.settings.focusInput && event && event.currentTarget && event.currentTarget.nodeName == 'INPUT' && event.currentTarget.select()
            },
    
            _blur: function(){
    
                /**
                 * 1. Get hovered item
                 * 2. If not check if input value == select option
                 * 3. If none
                 */
    
                var val = $.trim(this.$input.val().toLowerCase()),
                    isNumber = !isNaN(val);
    
                var index = this.$options.filter(function(){
                    return this.nodeName == 'OPTION'
                }).filter(function(){
                    var _text = this.innerText || this.textContent
                    if(isNumber){
                        return parseInt($.trim(_text).toLowerCase()) == val
                    }
    
                    return $.trim(_text).toLowerCase() == val
    
                }).prop('index')
    
                /* Select by Index */
    
                this._selectByIndex(index)
    
            },
    
            _change: function(){
    
    
                this._updateInput();
    
            },
    
            _getAll: function(){
    
                return this.$items.filter('.option-item')
    
            },
            _getVisible: function(){
    
                return this.$items.filter('.option-item').filter(':visible')
    
            },
    
            _getHovered: function(){
    
                return this._getVisible().filter('.' + this.settings.hoverClass);
    
            },
    
            _open: function(){
    
                var self = this
    
                this.$container.addClass('combo-open')
    
                this.opened = true
    
                /* Focus input field */
    
                this.settings.focusInput && setTimeout(function(){ !self.$input.is(':focus') && self.$input.focus(); });
    
                /* Highligh the items */
    
                this._highlight()
    
                /* Fix scroll */
    
                this._fixScroll()
    
                /* Close all others */
    
    
                $.each($.fn[ pluginName ].instances, function(i, plugin){
    
                    if(plugin != self && plugin.opened) plugin.$container.trigger('comboselect:close')
                })
    
            },
    
            _toggle: function(){
    
                this.opened? this._close.call(this) : this._open.call(this)
            },
    
            _close: function(){
    
                this.$container.removeClass('combo-open combo-focus')
    
                this.$container.trigger('comboselect:closed')
    
                this.opened = false
    
                /* Show all items */
    
                this.$items.show();
    
            },
            _fixScroll: function(){
    
                /**
                 * If dropdown is hidden
                 */
                if(this.$dropdown.is(':hidden')) return;
    
    
                /**
                 * Else
                 */
                var item = this._getHovered();
    
                if(!item.length) return;
    
                /**
                 * Scroll
                 */
    
                var offsetTop,
                    upperBound,
                    lowerBound,
                    heightDelta = item.outerHeight()
    
                offsetTop = item[0].offsetTop;
    
                upperBound = this.$dropdown.scrollTop();
    
                lowerBound = upperBound + this.settings.maxHeight - heightDelta;
    
                if (offsetTop < upperBound) {
    
                    this.$dropdown.scrollTop(offsetTop);
    
                } else if (offsetTop > lowerBound) {
    
                    this.$dropdown.scrollTop(offsetTop - this.settings.maxHeight + heightDelta);
                }
    
            },
            /**
             * Update API
             */
    
            _update: function(){
    
                this.$options = this.$el.find('option, optgroup')
    
                this.$dropdown.empty();
    
                this._build();
            },
    
            /**
             * Destroy API
             */
    
            dispose: function(){
    
                /* Remove combo arrow, input, dropdown */
    
                this.$arrow.remove()
    
                this.$input.remove()
    
                this.$dropdown.remove()
    
                /* Remove tabindex property */
                this.$el
                    .removeAttr("tabindex")
    
                /* Check if there is a tabindex set before */
    
                if(!!this.$el.data('plugin_'+ dataKey + '_tabindex')){
                    this.$el.prop('tabindex', this.$el.data('plugin_'+ dataKey + '_tabindex'))
                }
    
                /* Unwrap */
    
                this.$el.unwrap()
    
                /* Remove data */
    
                this.$el.removeData('plugin_'+dataKey)
    
                /* Remove tabindex data */
    
                this.$el.removeData('plugin_'+dataKey + '_tabindex')
    
                /* Remove change event on select */
    
                this.$el.off('change.select focus.select blur.select');
    
            }
        });
    
    
    
        // A really lightweight plugin wrapper around the constructor,
        // preventing against multiple instantiations
        $.fn[ pluginName ] = function ( options, args ) {
    
            this.each(function() {
    
                var $e = $(this),
                    instance = $e.data('plugin_'+dataKey)
    
                if (typeof options === 'string') {
    
                    if (instance && typeof instance[options] === 'function') {
                            instance[options](args);
                    }
    
                }else{
    
                    if (instance && instance.dispose) {
                            instance.dispose();
                    }
    
                    $.data( this, "plugin_" + dataKey, new Plugin( this, options ) );
    
                }
    
            });
    
            // chain jQuery functions
            return this;
        };
    
        $.fn[ pluginName ].instances = [];
    
    }));
    
    </script>

@endsection
