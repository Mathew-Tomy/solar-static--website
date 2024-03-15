<div class="joinchat joinchat--left" data-settings='{"telephone":"+919496631442","mobile_only":false,"button_delay":1,"whatsapp_web":true,"message_views":2,"message_delay":2,"message_badge":false,"message_send":"","message_hash":""}'>

						<div class="joinchat__button">

							<div class="joinchat__button__open"></div>

																		<div class="joinchat__button__sendtext">Open chat</div>

																										</div>

										<svg height="0" width="0"><defs><clipPath id="joinchat__message__peak"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"/></clipPath></defs></svg>

					</div>


        <script>
    !function(t,o){"use strict";o.joinchat_obj=o.joinchat_obj||{},joinchat_obj=t.extend({$div:null,settings:null,store:null,chatbox:!1,is_mobile:!1},joinchat_obj),joinchat_obj.$=function(o){return t(o||this.$div,this.$div)},joinchat_obj.send_event=function(t,e){var n=o[this.settings.ga_tracker||"ga"];(t=t||"",e=e||"click","function"==typeof n&&"function"==typeof n.getAll)?(n("set","transport","beacon"),n.getAll().forEach(function(o){o.send("event","JoinChat",e,t)})):"function"==typeof gtag&&gtag("event",e,{event_category:"JoinChat",event_label:t,transport_type:"beacon"});"object"==typeof dataLayer&&dataLayer.push({event:"JoinChat",eventAction:e,eventLabel:t}),"function"==typeof fbq&&fbq("trackCustom","JoinChat",{eventAction:e,eventLabel:t})},joinchat_obj.whatsapp_link=function(t,o,e){return((e=void 0!==e?e:this.settings.whatsapp_web&&!this.is_mobile)?"https://web.whatsapp.com/send":"https://api.whatsapp.com/send")+"?phone="+encodeURIComponent(t)+"&text="+encodeURIComponent(o||"")},joinchat_obj.chatbox_show=function(){this.chatbox||(this.chatbox=!0,this.$div.addClass("joinchat--chatbox"),this.settings.message_badge&&this.$(".joinchat__badge").hasClass("joinchat__badge--in")&&this.$(".joinchat__badge").toggleClass("joinchat__badge--in joinchat__badge--out"),t(document).trigger("joinchat:show"))},joinchat_obj.chatbox_hide=function(){this.chatbox&&(this.chatbox=!1,this.$div.removeClass("joinchat--chatbox joinchat--tooltip"),this.settings.message_badge&&this.$(".joinchat__badge").removeClass("joinchat__badge--out"),t(document).trigger("joinchat:hide"))},joinchat_obj.save_hash=function(){var t=this.settings.message_hash||"none",o=(this.store.getItem("joinchat_hashes")||"").split(",").filter(Boolean);-1===o.indexOf(t)&&(o.push(t),this.store.setItem("joinchat_hashes",o.join(",")))},joinchat_obj.open_whatsapp=function(e,n){var i={link:this.whatsapp_link(e||this.settings.telephone,n||this.settings.message_send)},a=new RegExp("^https?://(wa.me|(api|web|chat).whatsapp.com|"+location.hostname.replace(".",".")+")/.*","i");t(document).trigger("joinchat:open",[i,this.settings]),a.test(i.link)?(this.send_event(i.link),o.open(i.link,"joinchat")):console.error("Join.chat: the link doesn't seem safe, it must point to the current domain or whatsapp.com")},t(function(){joinchat_obj.$div=t(".joinchat"),joinchat_obj.settings=joinchat_obj.$div.data("settings"),joinchat_obj.is_mobile=!!navigator.userAgent.match(/Android|iPhone|BlackBerry|IEMobile|Opera Mini/i);try{localStorage.setItem("test",1),localStorage.removeItem("test"),joinchat_obj.store=localStorage}catch(t){joinchat_obj.store={_data:{},setItem:function(t,o){this._data[t]=String(o)},getItem:function(t){return this._data.hasOwnProperty(t)?this._data[t]:null}}}if(void 0===joinchat_obj.settings)try{joinchat_obj.settings=JSON.parse(joinchat_obj.$div.attr("data-settings"))}catch(t){joinchat_obj.settings=void 0}joinchat_obj.$div.length&&joinchat_obj.settings&&joinchat_obj.settings.telephone&&(joinchat_obj.is_mobile||!joinchat_obj.settings.mobile_only?function(){t(document).trigger("joinchat:starting");var e,n,i=1e3*joinchat_obj.settings.button_delay,a=1e3*joinchat_obj.settings.message_delay,s=!!joinchat_obj.settings.message_hash,c=!!joinchat_obj.$(".joinchat__box").length,h=parseInt(joinchat_obj.store.getItem("joinchat_views")||1)>=joinchat_obj.settings.message_views,j=-1!==(joinchat_obj.store.getItem("joinchat_hashes")||"").split(",").filter(Boolean).indexOf(joinchat_obj.settings.message_hash||"none");function _(){clearTimeout(n),joinchat_obj.chatbox_show()}function r(){joinchat_obj.save_hash(),joinchat_obj.chatbox_hide()}function b(){c&&!joinchat_obj.chatbox?_():(r(),joinchat_obj.open_whatsapp())}var l="joinchat--show";j||s&&a&&!joinchat_obj.settings.message_badge&&h||(l+=" joinchat--tooltip");setTimeout(function(){joinchat_obj.$div.addClass(l)},i),s&&!j&&a&&(joinchat_obj.settings.message_badge?n=setTimeout(function(){joinchat_obj.$(".joinchat__badge").addClass("joinchat__badge--in")},i+a):h&&(n=setTimeout(_,i+a)));c&&!joinchat_obj.is_mobile&&joinchat_obj.$(".joinchat__button").mouseenter(function(){e=setTimeout(_,1500)}).mouseleave(function(){clearTimeout(e)});if(joinchat_obj.$(".joinchat__button").click(b),joinchat_obj.$(".joinchat__close").click(r),joinchat_obj.$(".joinchat__box__scroll").on("mousewheel DOMMouseScroll",function(t){t.preventDefault();var o=t.originalEvent.wheelDelta||-t.originalEvent.detail;this.scrollTop+=30*(o<0?1:-1)}),joinchat_obj.is_mobile){var g,u=o.innerHeight;t(document).on("focus blur","input, textarea",function(e){t(e.target).closest(joinchat_obj.$div)||(clearTimeout(g),g=setTimeout(function(){joinchat_obj.$div.toggleClass("joinchat--show",o.innerHeight>.7*u)},800))})}if(t(document).on("click",".joinchat_open",function(t){t.preventDefault(),joinchat_obj.chatbox||b()}),t(document).on("click",".joinchat_close",function(t){t.preventDefault(),r()}),c&&"IntersectionObserver"in o){var d=t(".joinchat_show, .joinchat_force_show");if(d.length>0){var p=new IntersectionObserver(function(o){t.each(o,function(){if(this.intersectionRatio>0&&(!j||t(this.target).hasClass("joinchat_force_show")))return _(),p.disconnect(),!1})});d.each(function(){p.observe(this)})}}t(document).trigger("joinchat:start")}():t(document).on("click",".joinchat_open",function(t){t.preventDefault(),joinchat_obj.open_whatsapp()})),joinchat_obj.store.setItem("joinchat_views",parseInt(joinchat_obj.store.getItem("joinchat_views")||0)+1)})}(jQuery,window);
</script>
<style>
.joinchat{--bottom:20px;--sep:20px;--header:70px;--btn:60px;--red:37;--green:211;--blue:102;--rgb:var(--red),var(--green),var(--blue);--color:rgb(var(--rgb));--dark:rgb(calc(var(--red) - 75),calc(var(--green) - 75),calc(var(--blue) - 75));--hover:rgb(calc(var(--red) + 50),calc(var(--green) + 50),calc(var(--blue) + 50));--bg:rgba(var(--rgb),0.04);--tolerance:210;--bw:calc((var(--red)*0.2126 + var(--green)*0.7152 + var(--blue)*0.0722 - var(--tolerance))*-100000);--text:rgba(var(--bw),var(--bw),var(--bw),min(1,max(0.7,var(--bw))));--msg:var(--color);position:fixed;z-index:1000;right:var(--sep);bottom:var(--bottom);color:var(--text);font:normal normal normal 16px/1.625em -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Open Sans,Helvetica Neue,sans-serif;letter-spacing:0;transform:scale3d(0,0,0);transition:transform .3s ease-in-out;-webkit-user-select:none;-ms-user-select:none;user-select:none;-webkit-font-smoothing:antialiased}.joinchat *,.joinchat :after,.joinchat :before{box-sizing:border-box}.joinchat--show{transform:scaleX(1);transition:transform .5s cubic-bezier(.18,.89,.32,1.28)}.joinchat.joinchat--left{right:auto;left:var(--sep)}@media (max-width:480px),(orientation:landscape) and (max-width:767px){.joinchat{--bottom:6px;--sep:6px;--header:55px}}.joinchat.joinchat--dark{--msg:var(--dark)}@media (color-index:48){.joinchat.joinchat--dark-auto{--msg:var(--dark)}}@media (prefers-color-scheme:dark){.joinchat.joinchat--dark-auto{--msg:var(--dark)}}.joinchat__button{display:flex;flex-direction:row;position:absolute;z-index:2;bottom:8px;right:8px;height:var(--btn);min-width:var(--btn);max-width:95vw;background:#25d366;color:inherit;border-radius:calc(var(--btn)/2);box-shadow:1px 6px 24px 0 rgba(7,94,84,.24);cursor:pointer;transition:background .2s linear;-webkit-tap-highlight-color:rgba(0,0,0,0);will-change:background-color,width}.joinchat__button:hover{background:#128c7e;transition:background 1.5s linear}.joinchat__button:active{background:#128c7e;transition:none}.joinchat--chatbox .joinchat__button{background:var(--color);transition:background .2s linear;box-shadow:0 1px 2px 0 rgba(0,0,0,.3)}.joinchat--chatbox .joinchat__button:active,.joinchat--chatbox .joinchat__button:hover{background:var(--hover)}[dir=rtl] .joinchat__button{flex-direction:row-reverse}.joinchat--left .joinchat__button{right:auto;left:8px;flex-direction:row-reverse}[dir=rtl] .joinchat--left .joinchat__button{flex-direction:row}.joinchat__button__open{width:var(--btn);height:var(--btn);background:transparent url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M3.516 3.516c4.686-4.686 12.284-4.686 16.97 0 4.686 4.686 4.686 12.283 0 16.97a12.004 12.004 0 01-13.754 2.299l-5.814.735a.392.392 0 01-.438-.44l.748-5.788A12.002 12.002 0 013.517 3.517zm3.61 17.043l.3.158a9.846 9.846 0 0011.534-1.758c3.843-3.843 3.843-10.074 0-13.918-3.843-3.843-10.075-3.843-13.918 0a9.846 9.846 0 00-1.747 11.554l.16.303-.51 3.942a.196.196 0 00.219.22l3.961-.501zm6.534-7.003l-.933 1.164a9.843 9.843 0 01-3.497-3.495l1.166-.933a.792.792 0 00.23-.94L9.561 6.96a.793.793 0 00-.924-.445 1291.6 1291.6 0 00-2.023.524.797.797 0 00-.588.88 11.754 11.754 0 0010.005 10.005.797.797 0 00.88-.587l.525-2.023a.793.793 0 00-.445-.923L14.6 13.327a.792.792 0 00-.94.23z'/%3E%3C/svg%3E") 50% no-repeat;background-size:60%}.joinchat--chatbox .joinchat__button__open{display:none}.joinchat__button__image{position:absolute;top:1px;right:1px;width:calc(var(--btn) - 2px);height:calc(var(--btn) - 2px);border-radius:50%;overflow:hidden;opacity:0}.joinchat__button__image img{display:block;width:100%;height:100%;object-fit:cover}.joinchat--show .joinchat__button__image{animation:joinchat_image_loop 20s linear 5s infinite normal both}.joinchat--image .joinchat__button__image{opacity:1;animation:none}.joinchat--chatbox .joinchat__button__image{display:none}.joinchat__button__send{display:none;width:var(--btn);height:var(--btn);max-width:var(--btn);padding:12px 11px 12px 13px;margin:0;flex-shrink:0}.joinchat--chatbox .joinchat__button__send{display:block}.joinchat__button__send path{fill:none!important;stroke:var(--text)!important}.joinchat__button__send .joinchat_svg__plain{stroke-dasharray:1097;stroke-dashoffset:1097;animation:joinchat_plain 6s .2s ease-in-out infinite}.joinchat__button__send .joinchat_svg__chat{stroke-dasharray:1020;stroke-dashoffset:1020;animation:joinchat_chat 6s 3.2s ease-in-out infinite}.joinchat__button__sendtext{padding:0;max-width:0;font-weight:600;line-height:var(--btn);white-space:nowrap;opacity:0;overflow:hidden;transition:none}.joinchat--chatbox .joinchat__button__sendtext{padding:0 4px 0 24px;max-width:200px;opacity:1;transition:max-width .2s linear,opacity .4s ease-out .2s}.joinchat--chatbox.joinchat--left .joinchat__button__sendtext{padding:0 24px 0 4px}.joinchat__badge{position:absolute;top:-4px;right:-4px;width:20px;height:20px;border:none;border-radius:50%;background:#e82c0c;color:#fff;font-size:12px;font-weight:600;line-height:20px;text-align:center;box-shadow:none;opacity:0;pointer-events:none}.joinchat__badge.joinchat__badge--in{animation:joinchat_badge_in .5s cubic-bezier(.27,.9,.41,1.28) 1 both}.joinchat__badge.joinchat__badge--out{animation:joinchat_badge_out .4s cubic-bezier(.215,.61,.355,1) 1 both}.joinchat__tooltip{position:absolute;top:14px;right:76px;max-width:calc(100vw - 105px);height:32px;padding:0 14px;border:none;border-radius:16px;background:#fff;color:rgba(0,0,0,.8);line-height:31px;white-space:nowrap;opacity:0;filter:drop-shadow(0 1px 4px rgba(0,0,0,.4));transform:translateZ(0);pointer-events:none}.joinchat__tooltip:after{content:"";display:block;position:absolute;top:10px;right:-6px;border:8px solid transparent;border-width:6px 0 6px 8px;border-left-color:#fff}.joinchat__tooltip div{overflow:hidden;text-overflow:ellipsis}.joinchat--tooltip .joinchat__tooltip{animation:joinchat_tootlip 20s linear 5s 1 normal both}.joinchat--chatbox .joinchat__tooltip{display:none}.joinchat--left .joinchat__tooltip{right:auto;left:76px}.joinchat--left .joinchat__tooltip:after{left:-6px;right:auto;border-color:transparent;border-width:6px 8px 6px 0;border-right-color:#fff}.joinchat__box{display:flex;flex-direction:column;position:absolute;bottom:0;right:0;z-index:1;width:calc(100vw - var(--sep)*2);max-width:400px;min-height:170px;max-height:calc(100vh - var(--bottom) - var(--sep));border-radius:32px;background:transparent;box-shadow:0 2px 6px 0 rgba(0,0,0,.5);text-align:left;overflow:hidden;transform:scale3d(0,0,0);opacity:0;transition:opacity .4s ease-out,transform 0ms linear .3s}.joinchat--chatbox .joinchat__box{opacity:1;transform:scaleX(1);transition:opacity .2s ease-out,transform 0ms linear}.joinchat--left .joinchat__box{right:auto;left:0}.joinchat__header{position:relative;flex-shrink:0;height:var(--header);line-height:var(--header);padding:0 26px;margin:0;background:var(--color);text-align:left}[dir=rtl] .joinchat__header{text-align:right}.joinchat--dark .joinchat__header{background:var(--dark)}.joinchat__copy{font-size:11px;line-height:18px;color:inherit!important;text-decoration:none!important;fill:currentColor;opacity:.8}.joinchat__copy svg{display:inline-block;width:auto;height:18px;vertical-align:-26%}a.joinchat__copy:active,a.joinchat__copy:hover{color:inherit!important;text-decoration:none!important;opacity:.9}.joinchat__close{position:absolute;top:50%;right:24px;width:34px;height:34px;margin-top:-16px;border-radius:50%;background:rgba(0,0,0,.4) url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23fff'%3E%3Cpath d='M24 2.4L21.6 0 12 9.6 2.4 0 0 2.4 9.6 12 0 21.6 2.4 24l9.6-9.6 9.6 9.6 2.4-2.4-9.6-9.6L24 2.4z'/%3E%3C/svg%3E") 50% no-repeat;background-size:12px;cursor:pointer;transition:background-color .3s ease-out;-webkit-tap-highlight-color:rgba(0,0,0,0)}.joinchat__close:hover{background-color:rgba(0,0,0,.6)}[dir=rtl] .joinchat__close{right:auto;left:24px}.joinchat__box__scroll{padding:20px 0 70px;padding-bottom:calc(var(--btn) + 10px);background:#fff linear-gradient(0deg,var(--bg),var(--bg));overflow-x:hidden;overflow-y:auto;will-change:scroll-position}.joinchat__box__scroll::-webkit-scrollbar{width:5px;background:transparent}.joinchat__box__scroll::-webkit-scrollbar-thumb{border-radius:3px;background:transparent}.joinchat__box__scroll:hover::-webkit-scrollbar-thumb{background:rgba(0,0,0,.2)}.joinchat--blur .joinchat__box__scroll{background:rgba(var(--rgb),.2);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px)}.joinchat--dark .joinchat__box__scroll{background:#1a1a1a}@supports (-webkit-overflow-scrolling:touch){.joinchat__box__scroll{overflow-y:scroll;-webkit-overflow-scrolling:touch}}@media (max-width:480px),(orientation:landscape) and (max-width:767px){.joinchat__close{margin-top:-14px;width:28px;height:28px}.joinchat__box__scroll{padding-top:15px}}@media (color-index:48){.joinchat--dark-auto .joinchat__box__scroll{background:#1a1a1a}.joinchat--dark-auto .joinchat__header{background:var(--dark)}}@media (prefers-color-scheme:dark){.joinchat--dark-auto .joinchat__box__scroll{background:#1a1a1a}.joinchat--dark-auto .joinchat__header{background:var(--dark)}}.joinchat__message{position:relative;min-height:60px;padding:17px 20px;margin:0 26px 26px;border-radius:32px;background:#fff;color:#4a4a4a;filter:drop-shadow(0 1px 2px rgba(0,0,0,.3));transform:translateZ(0)}.joinchat__message:before{content:"";display:block;position:absolute;bottom:20px;left:-15px;width:17px;height:25px;background:inherit;-webkit-clip-path:url(#joinchat__message__peak);clip-path:url(#joinchat__message__peak)}.joinchat--dark .joinchat__message{background:#505050;color:#d8d8d8}@media (color-index:48){.joinchat--dark-auto .joinchat__message{background:#505050;color:#d8d8d8}}@media (prefers-color-scheme:dark){.joinchat--dark-auto .joinchat__message{background:#505050;color:#d8d8d8}}@media (max-width:480px),(orientation:landscape) and (max-width:767px){.joinchat__message{padding:18px 16px;line-height:24px;margin:0 20px 20px}}@keyframes joinchat_badge_in{0%{opacity:0;transform:translateY(50px)}to{opacity:1;transform:translateY(0)}}@keyframes joinchat_badge_out{0%{opacity:1;transform:translateY(0)}to{opacity:0;transform:translateY(-20px)}}@keyframes joinchat_plain{0%,50%,to{stroke-dashoffset:1097}5%,45%{stroke-dashoffset:0}}@keyframes joinchat_chat{0%,50%,to{stroke-dashoffset:1020}5%,45%{stroke-dashoffset:0}}@keyframes joinchat_image_loop{0%{opacity:0}3%,20%{opacity:1}25%,to{opacity:0}}@keyframes joinchat_tootlip{0%{opacity:0;transform:scaleY(0)}1%,20%{opacity:1;transform:scaleY(1)}25%,to{opacity:0;transform:scaleY(1)}}



    </style>
<footer id="colophon" class="site-footer style-1" role="contentinfo">
				
<div class="footer-container invert">
	<div class="container">
		<div class="site-info">
			<div class="site-info-wrap row">
					<div class="right-part col-lg-7 col-md-6 col-sm-6 col-xs-12">

						<div class="footer-logo"><a href="index.php" class="footer-logo_link"><img src="images/logo.jpeg" alt="Solarin" class="footer-logo_img" ></a></div>					</div>

				<div class="left-part col-lg-5 col-md-6 col-sm-6 col-xs-12">
						<div class="footer-copyright"><span>Copyright</span><span>© 2021 Kissan Bio Gas and Solar System. All rights reserved.</span></div>				</div>

			</div>
		</div><!-- .site-info -->
	</div>
</div><!-- .footer-container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="cherry-popup cherry-popup-wrapper cherry-popup-1033 simple-fade-animation overlay-fill-color-type layout-type-center default-style custom-event-type  popup-type-signup" data-popup-settings='{"id":1033,"use":"custom-event","layout-type":"center","show-hide-animation":"simple-fade","base-style":"default","width":"360","height":"665","padding":"30","container-bg-type":"fill-color","container-color":"#fff","container-opacity":"100","container-image":"","border-radius":"3","content-position":"center","show-once":"false","overlay-type":"fill-color","overlay-color":"#000","overlay-opacity":"50","overlay-image":"","overlay-close-area":"true","open-appear-event":"page-load","load-open-delay":"1","inactive-time":"1","page-scrolling-value":"5","close-appear-event":"outside-viewport","custom-event-type":"click","popup-selector":".cherry-popups-signup-link","template":"default-popup.tmpl","popup-type":"signup","custom-class":""}'><div class="cherry-popup-overlay"></div><div class="cherry-popup-container container-fill-color-type"><div class="cherry-popup-container__inner"><div class="cherry-popup-container__dynamic"><div class="cherry-popup-title"><h4 >Sign Up</h4></div>
<div class="cherry-popup-content"></div>
<div class="cherry-popup-register"><form method="POST" action="#" class="cherry-popup-register__form">
<!--
	wsl_render_auth_widget
	WordPress Social Login 2.3.3.
	http://wordpress.org/plugins/wordpress-social-login/
-->

<style type="text/css">
.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

<div class="wp-social-login-widget">

	<div class="wp-social-login-connect-with"></div>

	<div class="wp-social-login-provider-list">

		<a rel="nofollow" href="https://ld-wp.template-help.com/rockthemes/18683_v1/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Facebook&#038;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Frockthemes%2F18683_v1%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
			Facebook
		</a>

		<a rel="nofollow" href="https://ld-wp.template-help.com/rockthemes/18683_v1/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Google&#038;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Frockthemes%2F18683_v1%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
			Google
		</a>

		<a rel="nofollow" href="https://ld-wp.template-help.com/rockthemes/18683_v1/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Twitter&#038;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Frockthemes%2F18683_v1%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
			Twitter
		</a>

	</div>

	<div class="wp-social-login-widget-clearing"></div>

</div>

<!-- wsl_render_auth_widget -->

<div class="cherry-popup-signup__new-user"><span>or enter your registration credentials</span></div><div class="cherry-popup-register__input-group"><div class="cherry-popup-register__wrap"><input id="cherry-popup-register-login-input" class="cherry-popup__input cherry-popup-register__input-login" type="text" name="register-login" value="" placeholder="Login" tabindex=1></div><div class="cherry-popup-register__wrap"><input id="cherry-popup-register-mail-input" class="cherry-popup__input cherry-popup-login__input-mail" type="email" name="register-mail" value="" placeholder="Email" tabindex=2></div><div class="cherry-popup-signup__login-user"><span>Already have an account?</span><a href="#" class="cherry-popups-login-link">Log in</a></div><div class="cherry-popup-register__wrap"><div class="cherry-popup-register__sign-up"><span>Sign up</span><div class="cherry-popup-spinner"><div class="cherry-double-bounce1"></div><div class="cherry-double-bounce2"></div></div></div></div></div><div class="cherry-popup-register__message"><span></span></div></form></div>
</div></div><div class="cherry-popup-close-button"><span class="dashicons dashicons-no"></span></div></div></div><div class="cherry-popup cherry-popup-wrapper cherry-popup-1032 simple-fade-animation overlay-fill-color-type layout-type-center default-style custom-event-type  popup-type-login" data-popup-settings='{"id":1032,"use":"custom-event","layout-type":"center","show-hide-animation":"simple-fade","base-style":"default","width":"360","height":"665","padding":"30","container-bg-type":"fill-color","container-color":"#fff","container-opacity":"100","container-image":"","border-radius":"3","content-position":"center","show-once":"false","overlay-type":"fill-color","overlay-color":"#000","overlay-opacity":"50","overlay-image":"","overlay-close-area":"true","open-appear-event":"page-load","load-open-delay":"1","inactive-time":"1","page-scrolling-value":"5","close-appear-event":"outside-viewport","custom-event-type":"click","popup-selector":".cherry-popups-login-link","template":"default-popup.tmpl","popup-type":"login","custom-class":""}'><div class="cherry-popup-overlay"></div><div class="cherry-popup-container container-fill-color-type"><div class="cherry-popup-container__inner"><div class="cherry-popup-container__dynamic"><div class="cherry-popup-title"><h4 >Login</h4></div>
<div class="cherry-popup-content"></div>
<div class="cherry-popup-login"><form method="POST" action="#" class="cherry-popup-login__form">
<!--
	wsl_render_auth_widget
	WordPress Social Login 2.3.3.
	http://wordpress.org/plugins/wordpress-social-login/
-->

<style type="text/css">
.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

<div class="wp-social-login-widget">

	<div class="wp-social-login-connect-with"></div>

	<div class="wp-social-login-provider-list">

		<a rel="nofollow" href="https://ld-wp.template-help.com/rockthemes/18683_v1/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Facebook&#038;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Frockthemes%2F18683_v1%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
			Facebook
		</a>

		<a rel="nofollow" href="https://ld-wp.template-help.com/rockthemes/18683_v1/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Google&#038;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Frockthemes%2F18683_v1%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
			Google
		</a>

		<a rel="nofollow" href="https://ld-wp.template-help.com/rockthemes/18683_v1/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Twitter&#038;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Frockthemes%2F18683_v1%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
			Twitter
		</a>

	</div>

	<div class="wp-social-login-widget-clearing"></div>

</div>

<!-- wsl_render_auth_widget -->

<div class="cherry-popup-login__use-mail"><span>or use your login data</span></div><div class="cherry-popup-login__input-group"><div class="cherry-popup-login__wrap"><input id="cherry-popup-user-input" class="cherry-popup__input cherry-popup-login__input-user" type="text" name="login-user" value="" placeholder="Login"></div><div class="cherry-popup-login__wrap"><input id="cherry-popup-pass-input" class="cherry-popup__input cherry-popup-login__input-pass" type="password" name="login-password" value="" placeholder="Password"></div><div class="cherry-popup-login__wrap"><div class="cherry-popup-login__signup-message"><span>Don&#039;t have an account? Click here to</span><a href="#" class="cherry-popups-signup-link">Sign up</a></div></div><div class="cherry-popup-login__wrap"><div class="cherry-popup-check cherry-popup-login__remember"><div class="marker"><span class="dashicons dashicons-yes"></span></div><span class="label">Remember me</span></div></div><div class="cherry-popup-login__wrap"><div class="cherry-popup-login__login-in"><span>Log in</span><div class="cherry-popup-spinner"><div class="cherry-double-bounce1"></div><div class="cherry-double-bounce2"></div></div></div></div></div><div class="cherry-popup-login__message"><span></span></div></form></div>
</div></div><div class="cherry-popup-close-button"><span class="dashicons dashicons-no"></span></div></div></div><script type='text/javascript'>
/* <![CDATA[ */
var wp_load_style = ["cherry-socialize-public.css","cherry-testi.css","cherry-trending-posts.css","cherry-services.css","cherry-services-theme.css","font-awesome.css","contact-form-7.css","wsl-widget.css","tm-timeline-css.css","cherry-handler-css.css","dashicons.css","magnific-popup.css","cherry-projects-styles.css","cherry-google-fonts-solarin.css","jet-elements.css","jet-elements-skin.css","jet-slider-pro-css.css","jet-juxtapose-css.css","jet-menu-public.css","cherry-google-fonts-jet_menu_options.css","elementor-icons.css","elementor-animations.css","elementor-frontend.css","cherry-popups-font-awesome.css","cherry-popups-styles.css","cherry-team.css","cherry-team-grid.css","solarin-theme-style.css","google-fonts-1.css"];
var wp_load_script = ["cherry-js-core.js","contact-form-7.js","cherry-handler-js.js","magnific-popup.js","cherry-projects-single-scripts.js","cherry-post-formats.js","jet-menu-public.js","cherry-popups-scripts.js","solarin-theme-script.js"];
var cherry_ajax = "f58c9a6bef";
var ui_init_object = {"auto_init":"false","targets":[]};
var CherryCollectedCSS = {"type":"text\/css","title":"cherry-collected-dynamic-style","css":".jet-menu .jet-menu-item .top-level-link {font-size:12px; font-family:Montserrat, sans-serif; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; }.jet-menu .jet-menu-item .sub-level-link {font-family:0; }.jet-menu .jet-menu-item .top-level-link .jet-menu-icon {align-self:center; order:-1; }.jet-menu .jet-menu-item .sub-level-link .jet-menu-icon {align-self:center; order:-1; }.jet-menu .jet-menu-item .top-level-link .jet-menu-badge {flex:0 0 100%; width:0; order:-2; text-align:right; }.jet-menu .jet-menu-item .sub-level-link .jet-menu-badge {flex:0 0 100%; width:0; order:-2; text-align:right; }.jet-menu .jet-menu-item .top-level-link .jet-dropdown-arrow {align-self:center; order:2; }.jet-menu .jet-menu-item .sub-level-link .jet-dropdown-arrow {align-self:center; order:2; margin-left:auto !important; }.jet-menu  {justify-content:flex-start !important; }.jet-menu .jet-menu-item.jet-current-menu-item .top-level-link {color:#ff6e40; }.jet-menu ul.jet-sub-menu {min-width:240px; }.jet-menu .jet-menu-item.jet-current-menu-item .top-level-link .jet-menu-icon {color:#ff6e40; }.jet-menu .jet-menu-badge {display:block; }.cherry-popup-1033 .cherry-popup-container {width:360px; height:665px; background-color:rgba(255,255,255,1);; border-radius:3px; }.cherry-popup-1033 .cherry-popup-container__inner {padding:30px; justify-content:center; }.cherry-popup-1033 .cherry-popup-overlay {background-color:rgba(0,0,0,0.5);; }.cherry-popup-1032 .cherry-popup-container {width:360px; height:665px; background-color:rgba(255,255,255,1);; border-radius:3px; }.cherry-popup-1032 .cherry-popup-container__inner {padding:30px; justify-content:center; }.cherry-popup-1032 .cherry-popup-overlay {background-color:rgba(0,0,0,0.5);; }"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/themes/solarin/cherry-framework/modules/cherry-js-core/assets/js/min/cherry-js-core.min.js?ver=1.5.10'></script>
<script type='text/javascript'>
function CherryCSSCollector(){"use strict";var t,e=window.CherryCollectedCSS;void 0!==e&&(t=document.createElement("style"),t.setAttribute("title",e.title),t.setAttribute("type",e.type),t.textContent=e.css,document.head.appendChild(t))}CherryCSSCollector();
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<!-- <script type='text/javascript' src='js/scripts.js?ver=5.0.3'></script> -->
<script type='text/javascript'>
/* <![CDATA[ */
var cherry_subscribe_form_ajax = {"action":"cherry_subscribe_form_ajax","nonce":"a4017b4f0d","type":"POST","data_type":"json","is_public":"true","sys_messages":{"invalid_base_data":"Unable to process the request without nonce or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"Access is allowed","wait_processing":"Please wait, processing the previous request"}};
var cherryHandlerAjaxUrl = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php"};
var cherry_login_form_ajax = {"action":"cherry_login_form_ajax","nonce":"79cc5ddedf","type":"POST","data_type":"json","is_public":"true","sys_messages":{"invalid_base_data":"Unable to process the request without nonce or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"Access is allowed","wait_processing":"Please wait, processing the previous request"}};
var cherryHandlerAjaxUrl = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php"};
var cherry_register_form_ajax = {"action":"cherry_register_form_ajax","nonce":"f6776ff22d","type":"POST","data_type":"json","is_public":"true","sys_messages":{"invalid_base_data":"Unable to process the request without nonce or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"Access is allowed","wait_processing":"Please wait, processing the previous request"}};
var cherryHandlerAjaxUrl = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php"};
var cherry_search_public_action = {"action":"cherry_search_public_action","nonce":"b925740f4d","type":"GET","data_type":"json","is_public":"true","sys_messages":{"invalid_base_data":"Unable to process the request without nonce or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"Access is allowed","wait_processing":"Please wait, processing the previous request"}};
var cherryHandlerAjaxUrl = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php"};
var jet_subscribe_form_ajax = {"action":"jet_subscribe_form_ajax","nonce":"f0f07d51fb","type":"POST","data_type":"json","is_public":"true","sys_messages":{"invalid_base_data":"Unable to process the request without nonce or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"Access is allowed","wait_processing":"Please wait, processing the previous request"}};
var cherryHandlerAjaxUrl = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php"};
var jet_menu_save_options_ajax = {"action":"jet_menu_save_options_ajax","nonce":"14fc31a4d4","type":"POST","data_type":"json","is_public":"false","sys_messages":{"invalid_base_data":"Unable to process the request without nonche or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"","wait_processing":"Please wait, processing the previous request"}};
var jet_menu_restore_options_ajax = {"action":"jet_menu_restore_options_ajax","nonce":"d5f4ebb46f","type":"POST","data_type":"json","is_public":"false","sys_messages":{"invalid_base_data":"Unable to process the request without nonche or server error","no_right":"No right for this action","invalid_nonce":"Stop CHEATING!!!","access_is_allowed":"","wait_processing":"Please wait, processing the previous request"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/themes/solarin/cherry-framework/modules/cherry-handler/assets/js/min/cherry-handler.min.js?ver=1.5.10'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/themes/solarin/assets/js/min/jquery.magnific-popup.min.js?ver=1.1.0'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-projects/public/assets/js/cherry-projects-single-scripts.js?ver=1.2.11'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/themes/solarin/cherry-framework/modules/cherry-post-formats-api/assets/js/min/cherry-post-formats.min.js?ver=1.5.10'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/jet-menu/assets/public/js/jet-menu-plugin.js?ver=1.3.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetMenuPublicSettings = {"menuSettings":{"jetMenuRollUp":"false","jetMenuMouseleaveDelay":"500","jetMenuMegaWidthType":"container","jetMenuMegaWidthSelector":"","jetMenuMegaOpenSubType":"hover"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/jet-menu/assets/public/js/jet-menu-public-script.js?ver=1.3.5'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-popups/assets/js/cherry-popups-plugin.js?ver=1.1.6'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-popups/assets/js/cherry-popups-scripts.js?ver=1.1.6'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-includes/js/hoverIntent.min.js?ver=1.8.1'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/elementor/assets/lib/swiper/swiper.jquery.min.js?ver=4.4.3'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/themes/solarin/assets/js/jquery.stretch.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var solarin = {"ajaxurl":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php","labels":{"totop_button":"","header_layout":"style-1"},"toTop":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/themes/solarin/assets/js/theme-script.js?ver=1.0.1'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-projects/public/assets/js/jquery.waypoints.min.js?ver=1.2.11'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-projects/public/assets/js/salvattore.min.js?ver=1.0.9'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-projects/public/assets/js/cherry-projects-plugin.js?ver=1.2.11'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cherryProjectsObjects = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php","cascadingListMap":[2,2,3,3,3,4,4,4,4],"cascadingListMapDevice":{"laptop":[2,2,3,3,3,4,4,4,4],"album_tablet":[2,2,3,3,3],"portrait_tablet":[1,2,2],"mobile":[1]}};
var cherryProjectsObjects = {"ajax_url":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php","cascadingListMap":[2,2,3,3,3,4,4,4,4],"cascadingListMapDevice":{"laptop":[2,2,3,3,3,4,4,4,4],"album_tablet":[2,2,3,3,3],"portrait_tablet":[1,2,2],"mobile":[1]}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-projects/public/assets/js/cherry-projects-scripts.js?ver=1.2.11'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/elementor/assets/lib/slick/slick.min.js?ver=1.8.1'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-testi/public/assets/js/public.min.js?ver=1.1.0.5'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAW1PaameImSqg4ucSnZN_zAat-K9_oa8o&#038;ver=4.9.8'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/easing/EasePack.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.4.1'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var elementorFrontendConfig = {"isEditMode":"","is_rtl":"","breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"urls":{"assets":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":54,"title":"Home","excerpt":""}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=2.1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetElements = {"messages":{"invalidMail":"Please specify a valid e-mail"},"jetParallaxSections":[]};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/jet-elements/assets/js/jet-elements.js?ver=1.10.3'></script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/jet-menu/assets/public/js/jet-menu-widgets-scripts.js?ver=1.3.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cherryServices = {"ajaxurl":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php","loader":"<div class=\"cherry-spinner cherry-spinner-double-bounce\"><div class=\"cherry-double-bounce1\"><\/div><div class=\"cherry-double-bounce2\"><\/div><\/div>"};
var cherryServices = {"ajaxurl":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php","loader":"<div class=\"cherry-spinner cherry-spinner-double-bounce\"><div class=\"cherry-double-bounce1\"><\/div><div class=\"cherry-double-bounce2\"><\/div><\/div>"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-services-list/public/assets/js/cherry-services.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cherryTeam = {"ajaxurl":"https:\/\/ld-wp.template-help.com\/rockthemes\/18683_v1\/wp-admin\/admin-ajax.php","loader":"<div class=\"cherry-spinner cherry-spinner-double-bounce\"><div class=\"cherry-double-bounce1\"><\/div><div class=\"cherry-double-bounce2\"><\/div><\/div>"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ld-wp.template-help.com/rockthemes/18683_v1/wp-content/plugins/cherry-team-members/public/assets/js/cherry-team.js?ver=1.4.5'></script>

<!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></body>
</html>