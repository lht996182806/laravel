OO(["com.mi.utils.time","com.mi.utils.L11N"],"com.mi.widgets.sms",function(c,a,d){var b=c.Countdown;var e=d.$class({constructor:function(h){this.$phoneBox=$(h.phoneBox||h.$phoneBox);var g=this.$phoneBox.attr("rule")||this.$phoneBox.attr("_rule");if(g){this.rule=new RegExp(g)}this.icodeCallback=h.icodeCallback;this.$form=$(h.form||h.$form||this.$phoneBox.closest("form"));this.$userBox=$(h.userBox||h.$userBox);this.$phoneTipLabel=$(h.phoneTipLabel||h.$phoneTipLabel);this.duplicatePhoneHTML=h.duplicatePhoneHTML||"";this.$maskButton=$(h.maskButton||h.$maskButton);this.$hiddenLayer=$(h.hiddenLayer||h.$hiddenLayer);this.$sendButton=$(h.sendButton||h.$sendButton);this.maxQuotaToShow=h.maxQuotaToShow||3;this.method=h.method||"POST";this.timeStep=h.timeStep;if(this.$sendButton.length){var i=this.$sendButton.attr("_sendButtonText");if(i){this.sendButtonText=i}}if(h.sendButtonText){this.sendButtonText=h.sendButtonText}else{if(this.$sendButton.length){var j=this.$sendButton[0].tagName.toUpperCase();if(j!=="INPUT"){this.buttonTextName="innerHTML";this.sendButtonText=this.$sendButton.html()}else{this.buttonTextName="value";this.sendButtonText=this.$sendButton.val()}}}this.sendingText=h.sendingText||this.sendButtonText;this.$captchaBox=$(h.captchaBox||h.$captchaBox);this.$403Label=$(h["403Label"]||h.$403Label);this.$quotaTextLabel=$(h.quotaTextLabel||h.$quotaTextLabel);this.$quotaLabel=$(h.quotaLabel||h.$quotaLabel);this.captchaURL=h.captchaURL;this.quotaURL=h.quotaURL;this.$captchaVerifyLabel=$(h.captchaVerifyLabel||h.$captchaVerifyLabel);this.captchaVerifyURL=h.captchaVerifyURL;this.waiting=false;this.checkBindingURL=h.checkBindingURL;this.type=h.type||0;this.autoStart=h.autoStart;this.getCaptchaPostData=h.getCaptchaPostData;this.getImagePostData=h.getImagePostData;this.getQuotaPostData=h.getQuotaPostData;this.getSMSPostData=h.getSMSPostData;this.getCheckBindingData=h.getCheckBindingData;this.getVerifyCaptchaData=h.getVerifyCaptchaData;var f=$(h.imageCaptchaMask||h.$imageCaptchaMask);if(f.length){this.$imageCaptchaMask=f;this.$imageCaptchaBox=$(h.imageCaptchaBox||h.$imageCaptchaBox);this.$imageNode=$(h.imageNode||h.$imageNode);this.$imageCaptchaMaskCloser=$(h.imageCaptchaMaskCloser||h.$imageCaptchaMaskCloser);this.$imageForm=$(h.imageForm||h.$imageForm||this.$imageNode.closest("form"));this.$imageSubmit=$(h.imageSubmit||h.$imageSubmit||this.$imageForm.find('input[type="submit"]')||this.$imageForm.find('input[type="button"]'));this.$imageCaptchaVerifyLabel=$(h.imageCaptchaVerifyLabel||h.$imageCaptchaVerifyLabel);this.$nextImageButton=$(h.nextImageButton||h.$nextImageButton);this.imageCaptchaVerifyURL=h.imageCaptchaVerifyURL}this.$smsFailureMsgBox=$(h.smsFailureMsgBox||h.$smsFailureMsgBox);if(this.$smsFailureMsgBox&&this.$smsFailureMsgBox.length){this.$smsFailureOKButton=this.$smsFailureMsgBox.find(".button");this.$smsFailureTextLabel=this.$smsFailureMsgBox.find(".text");this.origErrorText=this.$smsFailureTextLabel.text()}},render:function(){this.$sendButton.attr({autocomplete:"off",disableautocomplete:true});this.uiBind();this.sync();this.quota=null;this.disabled=false;this.countdown=null;this.sendTimes=0;if(this.autoStart){this.$sendButton.click()}},sync:function(){this.quota=null;if(this.waiting){this.disableSendButton()}else{var f=$.trim(this.$phoneBox.val());if(f){if(f!==this.$phoneBox.attr("_phoneBound")&&f!==this.$phoneBox.attr("_wrongFormat")){this.enableSendButton()}else{this.disableSendButton()}}else{this.disableSendButton()}}},uiBind:function(){if(this.$phoneBox.miPlaceholder&&this.$phoneBox.attr("placeholder")){this.$phoneBox.miPlaceholder()}if(this.$hiddenLayer&&this.$hiddenLayer.length){this.$hiddenLayer.hide();this.$maskButton.click(d.proxy(function(){this.$maskButton.hide();this.$hiddenLayer.show();this.$sendButton.click()},this))}if(this.$imageCaptchaBox){this.$imageNode.click(d.proxy(this.nextImage,this));this.$nextImageButton.click(d.proxy(this.nextImage,this));if(this.$imageForm.validate){this.$imageForm.validate()}if(this.$imageCaptchaBox.miPlaceholder&&this.$imageCaptchaBox.attr("placeholder")){this.$imageCaptchaBox.miPlaceholder()}this.$imageSubmit.click(d.proxy(this.onVerifyImage,this));this.$imageCaptchaBox.bind("keydown",d.proxy(function(h){if(h.keyCode===13){this.$imageCaptchaBox.blur();this.$imageSubmit.click();return false}},this));this.$imageCaptchaMaskCloser.click(d.proxy(this.hideImageCaptchaMask,this));if($.browser.msie&&+$.browser.version<=6){this.$imageCaptchaMask.css({position:"absolute"});if(this.$smsFailureMsgBox&&this.$smsFailureMsgBox.length){this.$smsFailureMsgBox.css({position:"absolute"})}var g=$(document);var f=$(window);f.bind("scroll resize",c.debounce(d.proxy(function(){this.$imageCaptchaMask.css({top:g.scrollTop()+"px",left:g.scrollLeft()+"px"});if(this.$smsFailureMsgBox&&this.$smsFailureMsgBox.length){this.$smsFailureMsgBox.css({top:g.scrollTop()+"px",left:g.scrollLeft()+"px"})}},this),500))}}if(this.captchaVerifyURL){this.$form.submit(d.proxy(function(){return false},this))}this.$phoneBox.blur(d.proxy(function(){d.proxy(this.checkBinding,this)();d.proxy(function(){if(this.waiting||this.disabled){return}var h=this.$phoneBox.val();if(this.rule){this.rule.lastIndex=0;if(!this.rule.test(h)){this.disableSendButton();this.$phoneBox.parent().addClass("error");this.$phoneBox.attr("_wrongFormat",this.$phoneBox.val())}else{this.$phoneBox.removeAttr("_wrongFormat")}}},this)()},this));this.$phoneBox.focus(d.proxy(function(){this.$phoneTipLabel.parent().removeClass("newerror");this.$phoneBox.parent().removeClass("error")},this));if($.browser.msie&&+$.browser.version===9){setInterval(d.proxy(this.sync,this),500)}else{this.$phoneBox.bind("propertychange input",c.debounce(d.proxy(this.sync,this)))}if($.browser.webkit&&typeof window.chrome==="object"){this.$phoneBox.bind("blur",d.proxy(function(){if(!this.$phoneBox.val()){this.$phoneBox.val(" ");setTimeout(d.proxy(function(){this.$phoneBox.val("")},this),100)}},this))}this.$sendButton.click(d.proxy(this.onSendSMS,this));this.$captchaBox.blur(d.proxy(this.onVerifySMS,this));if(this.$smsFailureOKButton){this.$smsFailureOKButton.click(d.proxy(this.hideSMSFailure,this))}},showSMSFailure:function(f){if(this.$smsFailureMsgBox&&this.$smsFailureMsgBox.length){if(f){this.$smsFailureTextLabel.html(f)}else{this.$smsFailureTextLabel.html(this.origErrorText)}this.$smsFailureMsgBox.show()}},hideSMSFailure:function(){if(this.$smsFailureMsgBox&&this.$smsFailureMsgBox.length){this.$smsFailureMsgBox.hide()}},checkBinding:function(){if(!this.checkBindingURL){return}var f=this.$phoneBox.val();$.ajax({url:this.checkBindingURL,type:"GET",dataType:"text",data:this.getCheckBindingData?this.getCheckBindingData():{externalId:f,type:"PH"},success:d.proxy(function(g){try{g=this.constructor.toJSON(g)}catch(h){return}if(g.code===0&&g.data.userId>0){this.$phoneTipLabel.html(this.duplicatePhoneHTML);this.$phoneBox.parent().removeClass("succ empty").addClass("newerror");this.disableSendButton();this.$phoneBox.attr("_phoneBound",f)}else{this.$phoneBox.removeAttr("_phoneBound")}},this)})},disableSendButton:function(f){this.$sendButton.attr("disabled","disabled").addClass("noSend");if(f){if(this.buttonTextName==="value"){this.$sendButton.val(this.sendingText+f)}else{this.$sendButton.html(this.sendingText+f)}}},enableSendButton:function(){if(this.disabled){return}if(this.buttonTextName==="value"){this.$sendButton.val(this.sendButtonText)}else{this.$sendButton.html(this.sendButtonText)}this.$sendButton.removeAttr("disabled").removeClass("noSend")},resetSendButton:function(){this.$sendButton.val(this.sendButtonText);this.enableSendButton()},showQuota:function(f){f=this.quota||0;if(f<0){f=0}if(f<=this.maxQuotaToShow){this.$quotaLabel.text(f);this.$quotaTextLabel.show()}},hideQuota:function(){this.$quotaTextLabel.hide();this.$quotaLabel.text("")},nextImage:function(){if(this.$imageNode){var f="";f=this.$imageNode.attr("_src")||this.$imageNode.attr("src");if(f.indexOf("?")===-1){f+="?"}else{f+="&"}f+="_="+c.now();this.$imageNode.attr("src",f);this.$imageCaptchaBox.val("")}},disable:function(){this.disabled=true;if(this.countdown){this.countdown.stop()}this.waiting=false;this.resetSendButton();this.disableSendButton()},showError:function(f){if(this.$smsFailureMsgBox&&this.$smsFailureMsgBox.length){this.showSMSFailure(f)}},getDescription:function(f){f=+f;switch(f){case 10017:return a.getResource("jsp_wap_ba_errortips3");case 70021:return a.getResource("jsp_cu_mnl_tip34");case 10001:case 5200209:return a.getResource("jsp_sys_error");case 1200208:return a.getResource("jsp_2014_bad_param");case 20025:return a.getResource("jsp_login_too_much");case 70022:case 1200210:return a.getResource("jsp_sms_unsent");case 70013:return a.getResource("jsp_cu_mnl_tip35");case 70017:return a.getResource("jsp_wap_ba_errortips1");case 87001:return a.getResource("jsp_regst_img_code_incorrect");case 20031:return a.getResource("jsp_regst_img_code_incorrect");default:return a.getResource("jsp_sms_unsent")}},sendSMS:function(){if(this.countdown){this.countdown.start()}this.waiting=true;var g=true;var f=false;if(!this.$imageNode||!this.$imageNode.length){this.$phoneBox.parent().removeClass("error");$.ajax({url:this.captchaURL,dataType:"text",type:this.method,data:this.getCaptchaPostData?this.getCaptchaPostData(this.sendTimes):{phone:this.$phoneBox.val()},statusCode:{"403":d.proxy(function(){this.hideImageCaptchaMask();this.$403Label.show()},this)},error:d.proxy(function(){this.showError();this.countdown.stop();this.enableSendButton()},this),success:d.proxy(function(j){try{j=this.constructor.toJSON(j)}catch(i){return}var h=j.code||j.result;this.icodeCallback(h,this.sendTimes);if(h===0){this.resetSendButton();if(this.sendTimes){if(this.quota!==null){if(!f){this.quota--;f=true}}}this.sendTimes++}else{g=false;this.showError(this.getDescription(h));this.countdown.stop();this.enableSendButton();if(h===87001||h===1200201){if(this.$imageNode){this.showImageCaptchaMask();this.$imageCaptchaBox.val("");this.$imageCaptchaVerifyLabel.html(this.getDescription(h));this.$imageCaptchaVerifyLabel.show();this.nextImage()}}else{if(this.$imageCaptchaVerifyLabel&&this.$imageCaptchaVerifyLabel.length){this.$imageCaptchaVerifyLabel.html(this.getDescription(h));this.$imageCaptchaVerifyLabel.show()}else{this.showError(this.getDescription(h))}}}if(typeof this.quota==="number"){if(g){if(!f){this.quota--;f=true}}this.showQuota(this.quota);if(this.quota<=0){if(this.quotaURL){if(this.countdown){this.countdown.stop()}this.disabled=true;this.disableSendButton()}}}},this)})}if(this.quota===null){if(this.quotaURL){$.ajax({url:this.quotaURL,dataType:"text",type:"POST",data:this.getQuotaPostData?this.getQuotaPostData():{address:this.$phoneBox.val(),contentType:this.type,userId:this.type?this.$userBox.val():-1},success:d.proxy(function(i){i=this.constructor.toJSON(i);var h=+i.info||0;if(!i.result){if(this.quota===null){this.quota=h}else{if(g){this.quota--}}}this.showQuota(this.quota);if(this.quota<=0){if(this.quotaURL){if(this.countdown){this.countdown.stop()}this.disabled=true;this.disableSendButton()}}},this)})}}else{}},onSendSMS:function(h){if(this.waiting||this.disabled){if(h){h.preventDefault()}return false}var j=this.$phoneBox.val();if(this.rule){this.rule.lastIndex=0;if(!this.rule.test(j)){this.disableSendButton();this.$phoneBox.parent().addClass("error");this.$phoneBox.attr("_wrongFormat",this.$phoneBox.val());return}}var f=this;var g=60*1000;if(this.timeStep){if(typeof this.timeStep==="number"){g+=this.sendTimes*this.timeStep}else{if(typeof this.timeStep==="function"){g=this.timeStep(sendTimes)}}}var i=this.countdown=new b({duration:g,interval:100,onProgress:function(k){if(!f.waiting){f.resetSendButton();this.stop()}var m=k.timeLeft;var l=Math.round(m/1000);if(l>0){f.disableSendButton("("+l+")")}else{f.resetSendButton();this.stop()}},onStop:function(){if(f.waiting){f.resetSendButton()}f.waiting=false},onComplete:function(){if(f.waiting){f.resetSendButton()}f.waiting=false}});if(this.$imageNode&&this.$imageNode.length){this.showImageCaptchaMask()}else{this.sendSMS()}},onVerifySMS:function(){if(!this.captchaVerifyURL){return}$.ajax({url:this.captchaVerifyURL,type:"GET",dataType:"text",data:this.getSMSPostData?this.getSMSPostData():{phone:this.$phoneBox.val(),ticket:this.$captchaBox.val()},success:d.proxy(function(g){this.$403Label.hide();g=this.constructor.toJSON(g);var f=g.result||g.code;if(g.result==="ok"){this.hideImageCaptchaMask();this.showCaptchaTip("","succ")}else{this.showCaptchaTip(this.getDescription(f),f)}},this)})},onVerifyImage:function(){var f=this.$imageCaptchaBox.val();if(!f){this.showImageCaptchaTip(null,"empty");return}$.ajax({url:this.imageCaptchaVerifyURL,type:this.method,dataType:"text",data:this.getImagePostData?this.getImagePostData():{phone:this.$phoneBox.val(),icode:f},statusCode:{"403":d.proxy(function(){this.hideImageCaptchaMask();this.$403Label.show()},this)},complete:d.proxy(function(){},this),success:d.proxy(function(h){this.$403Label.hide();this.$phoneBox.parent().removeClass("error");h=this.constructor.toJSON(h);if(h.result==="ok"){this.hideImageCaptchaMask();this.sendSMS();this.hideImageCaptchaMask()}else{var g=h.code||h.result;this.showImageCaptchaTip(this.getDescription(g),g);this.nextImage();if(g===87001){this.$imageCaptchaVerifyLabel.html(this.getDescription(g));this.$imageCaptchaVerifyLabel.show()}else{this.showError(this.getDescription(g));this.hideImageCaptchaMask()}}},this)})},showCaptchaTip:function(g,f){this.$captchaVerifyLabel.parent().removeClass("error succ empty repeat");if(g){this.$captchaVerifyLabel.html(g)}if(f){this.$captchaVerifyLabel.parent().addClass(f)}},showImageCaptchaTip:function(g,f){f=f||"empty";this.$imageCaptchaVerifyLabel.parent().removeClass("error succ empty repeat");if(g){this.$imageCaptchaVerifyLabel.html(g)}if(f){this.$imageCaptchaVerifyLabel.parent().addClass(f)}},showImageCaptchaMask:function(){if(this.$imageNode){this.nextImage();this.$imageCaptchaBox.val("");$(document.body).css("overflow","hidden");this.$imageCaptchaVerifyLabel.parent().removeClass("error succ empty repeat");this.$imageCaptchaVerifyLabel.parent().find(".check_tips").each(function(g,h){var f=$(h);f.html(f.attr("_orig")||"")});this.$imageCaptchaMask.show()}},hideImageCaptchaMask:function(){$(document.body).css("overflow","");this.$imageCaptchaMask.hide()}},{statics:{toJSON:function(f){return $.parseJSON(f.replace("&&&START&&&",""))}}});return{Sender:e}});