!function(t){let e=document.querySelector(".xpro-assistant-wrapper");if(e){let a=e.querySelector("form"),s=e.querySelector("#xpro-assistant-chat-container"),n=e.querySelector(".xpro-assistant-save-settings"),p;function r(t,e){let a=0,s=setInterval(()=>{""!==e&&e.length>0&&a<e.length?(t.innerHTML+=e.charAt(a),a++):clearInterval(s)},20)}function i(){Date.now();let t=Math.floor(100*Math.random()).toString(16);return`xpro-ai-result-${t}`}function o(t,e,a){return`<div class="xpro-assistant-chat-item ${t?"bot":"user"}">
                    <div class="xpro-assistant-chat">
                        <div class="xpro-assistant-profile">
                            <img src=${t?XproAssistant.botImage:XproAssistant.userImage} alt="${t?"bot-image":"user-image"}" />
                        </div>
                        <div class="xpro-assistant-message" id=${a}>${e}</div>
                    </div>
                </div>`}let l=async e=>{var n;e.preventDefault(),t(".xpro-assistant-voice-btn").removeClass("active"),d();let l=new FormData(a);if(""===l.get("prompt"))return;let c=i();s.innerHTML+=o(!1,l.get("prompt"),c),a.reset(),c=i(),s.innerHTML+=o(!0," ",c),s.scrollTop=s.scrollHeight;let g=document.getElementById(c);(n=g).textContent="",p=setInterval(()=>{n.textContent+=".","...."===n.textContent&&(n.textContent="")},300);let u=new FormData;u.append("prompt",l.get("prompt")),u.append("temperature",l.get("xpro-assistant-temperature")),u.append("tokens",l.get("xpro-assistant-tokens")),u.append("randomness",l.get("xpro-assistant-randomness")),u.append("frequency",l.get("xpro-assistant-frequency")),u.append("presence",l.get("xpro-assistant-presence")),u.append("output_language",l.get("xpro-assistant-language")),u.append("speak_language",l.get("xpro-assistant-speak")),u.append("speak_rate",l.get("xpro-assistant-speak-rate")),u.append("speak_pitch",l.get("xpro-assistant-speak-pitch")),u.append("action","xpro_ai_chat_box"),u.append("nonce",XproAssistant.nonce);let x=await fetch(XproAssistant.ajaxURL,{method:"POST",body:u});clearInterval(p),g.innerHTML=" ";let v="";if(x.ok){let m=await x.json();r(g,(v=m.data.message||XproAssistant.serverBusy).trim())}else r(g,(await x.text()).trim())};a.addEventListener("submit",l),a.addEventListener("keyup",t=>{13===t.keyCode&&l(t)});let c=t("#xpro-assistant-language");if(c.val(c.data("value")),t("#xpro-assistant-language option[value="+c.data("value")+"]").prop("selected"),"speechSynthesis"in window){function g(){let e=speechSynthesis.getVoices();t("#xpro-assistant-speak").empty(),e.forEach(function(e,a){let s=t("<option>");s.val(e.name),s.text(e.name+" ("+e.lang+")"),s.prop("selected",e.voiceURI===t("#xpro-assistant-speak").val()),t("#xpro-assistant-speak").append(s)})}g(),window.speechSynthesis.onvoiceschanged=function(t){g()};let u=new SpeechSynthesisUtterance;t("body").delegate(".xpro-assistant-profile","click",function(e){e.preventDefault(),t(this).toggleClass("active"),t(this).hasClass("active")?(u.text=t(this).parents(".xpro-assistant-chat-item").text(),u.rate=t("#xpro-assistant-speak-rate").val(),u.pitch=t("#xpro-assistant-speak-pitch").val(),u.lang=t("#xpro-assistant-language").val(),t("#xpro-assistant-speak").val()&&(u.voice=speechSynthesis.getVoices().filter(e=>e.name===t("#xpro-assistant-speak").val())[0]),u.onend=function(){t(this).removeClass("active")},speechSynthesis.speak(u)):(speechSynthesis.cancel(),t(this).removeClass("active"))})}function d(){if("webkitSpeechRecognition"in window){var e=new webkitSpeechRecognition,a="";t(".xpro-assistant-voice-btn").hasClass("active")?(e.start(),e.onresult=function(e){for(var s="",n=e.resultIndex;n<e.results.length;n++){var p=e.results[n][0].transcript;p.replace("\n","<br>"),e.results[n].isFinal?a+=p:s+=p}t(".xpro-assistant-form-submit-wrapper > input").val(a+s)},e.onspeechend=()=>{e.stop()},e.onerror=function(){t(".xpro-assistant-form-submit-wrapper > input").val("Sorry, I didn't get you")},e.onnomatch=()=>{t(".xpro-assistant-form-submit-wrapper > input").val("I didn't recognize that color.")}):e.stop()}else alert("Your browser is not supported.")}t(".xpro-assistant-voice-btn").on("click",function(e){e.preventDefault(),t(this).toggleClass("active"),d()});let x=async e=>{t(".xpro-assistant-save-settings").addClass("active");let s=new FormData(a),n=new FormData;n.append("temperature",s.get("xpro-assistant-temperature")),n.append("tokens",s.get("xpro-assistant-tokens")),n.append("randomness",s.get("xpro-assistant-randomness")),n.append("frequency",s.get("xpro-assistant-frequency")),n.append("presence",s.get("xpro-assistant-presence")),n.append("output_language",s.get("xpro-assistant-language")),n.append("speak_language",s.get("xpro-assistant-speak")),n.append("speak_rate",s.get("xpro-assistant-speak-rate")),n.append("speak_pitch",s.get("xpro-assistant-speak-pitch")),n.append("action","xpro_ai_chat_save_settings"),n.append("nonce",XproAssistant.nonce);let p=await fetch(XproAssistant.ajaxURL,{method:"POST",body:n});if(p.ok){let r=await p.json();r.success&&t(".xpro-assistant-save-settings").removeClass("active")}};n.addEventListener("click",x),t(".xpro-assistant-settings-toggle").on("click",function(e){e.preventDefault(),t(this).parents(".xpro-assistant-setting-wrapper").toggleClass("active")})}}(jQuery);