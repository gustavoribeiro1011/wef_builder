/*******************************************************************************
 * @001 FIELDS
 *******************************************************************************
 */
 result_fields = "";

 //Input
 if (input == "true") {
     var arrayLengthInput = inputs.length;
     result_input = "";
     for (var i = 0; i < arrayLengthInput; i++) {
         if (inputs[i].order) {
 
             if (inputs[i].style == 'float') {
                 float_div_class = 'class="js-float-label-wrapper"';
                 float_label_class = 'label_float';
             } else {
                 float_div_class = '';
                 float_label_class = '';
             }
 
             result_input += '<div data-sid="' + inputs[i].order + '" id="' + inputs[i].order + '" ' + float_div_class + '>';
             result_input += '<label class="est1 ' + float_label_class + '" ' + inputs[i].label_custom + ' for="' + inputs[i].id + '">' + inputs[i].label;
             result_input += '</label>';
             result_input += '<input type="' + inputs[i].type + '" ' + inputs[i].input_custom + ' ';
             result_input += 'id="' + inputs[i].id + '"';
             result_input += 'placeholder="' + inputs[i].placeholder + '"';
             result_input += 'class="' + inputs[i].class + ' input_float"';
             result_input += 'required="' + inputs[i].required + '">';
             result_input += '<span class="est1" id="asterisk_input_' + inputs[i].id + '"></span>';
             result_input += '<span id="help_input_' + inputs[i].id + '" class="textHelp"></span></label>';
             result_input += '</div>';
         } else {
             alert('Defina uma ordem de exibição para input "' + inputs[i].label + '"');
         }
     }
     result_fields += result_input;
 }
 
 
 
 
 //Textarea
 if (textarea == "true") {
     var arrayLengthTextArea = textareas.length;
     result_textarea = "";
     for (var i = 0; i < arrayLengthTextArea; i++) {
         if (textareas[i].order) {
             result_textarea += '<div data-sid="' + textareas[i].order + '" id="' + inputs[i].order + '">';
             result_textarea += '<label class="est1" ' + textareas[i].label_custom + '>' + textareas[i].label;
             result_textarea += '<span id="asterisk_textarea_' + textareas[i].id + '"></span></label>';
             result_textarea += '<textarea placeholder="' + textareas[i].placeholder + '" id="' + textareas[i].id + '"></textarea>';
             result_textarea += '</div>';
 
         } else {
             alert('Defina uma ordem de exibição para textarea "' + textareas[i].label + '"');
         }
     }
     result_fields += result_textarea;
 }
 
 //Checkbox
 if (checkbox == "true") {
     var arrayLengthCheckbox = checkboxs.length;
     result_checkbox = "";
     for (var i = 0; i < arrayLengthCheckbox; i++) {
         if (checkboxs[i].order) {
             result_checkbox += '<div data-sid="' + checkboxs[i].order + '" id="' + checkboxs[i].order + '" ' + checkboxs[i].div_custom + '>';
             result_checkbox += '<label class="est1" ' + checkboxs[i].label_custom + '>' + checkboxs[i].label;
             result_checkbox += '<span id="asterisk_checkbox_' + checkboxs[i].id + '"></span>';
             result_checkbox += '</label>';
             var arrayLengthCheckboxOptions = checkboxs[i].options.length;
             for (var x = 0; x < arrayLengthCheckboxOptions; x++) {
                 result_checkbox += '<div class="est1">';
                 result_checkbox += '<input type="checkbox"';
                 result_checkbox += 'name="checkbox_' + checkboxs[i].id + '"';
                 result_checkbox += 'value="' + checkboxs[i].options[x] + '">';
                 result_checkbox += '<label style="padding-left:5px;">' + checkboxs[i].options[x] + '</label></div>';
             }
             result_checkbox += '</div>';
         } else {
             alert('Defina uma ordem de exibição para checkbox "' + checkboxs[i].label + '"');
         }
     }
     result_fields += result_checkbox;
 }
 
 //Radio
 if (radio == "true") {
     var arrayLengthRadio = radios.length;
     result_radio = "";
     for (var i = 0; i < arrayLengthRadio; i++) {
 
         if (radios[i].order) {
 
 
 
 
             result_radio += '<div data-sid="' + radios[i].order + '" id="' + radios[i].order + '" ' + radios[i].div_custom + ' align="left" style="margin-bottom:25px;">';
 
             if (radios[i].id == "tipo_passagem") {
 
                 result_radio += '<span id="asterisk_radio_' + radios[i].id + '" style="margin-top:-25px;margin-bottom:10px;"></span>';
 
             } else {
                 result_radio += '<span id="asterisk_radio_' + radios[i].id + '" ></span>';
             }
 
             result_radio += '</div>';
 
 
 
             if (radios[i].custom == "true") {
 
                 result_radio += '<div data-sid="' + radios[i].order + '" id="' + radios[i].order + '" ' + radios[i].div_custom + '>';
                 result_radio += '<div  ' + radios[i].label_custom + ' >' + radios[i].label + '</div>';
 
                 var arrayLengthRadioOptions = radios[i].options.length;
 
                 for (var x = 0; x < arrayLengthRadioOptions; x++) {
                     result_radio += '<div>';
                     result_radio += '<input type="radio" id="radio_' + i + '"';
                     result_radio += 'name="radio_' + radios[i].id + '" value="' + radios[i].options[x] + '">';
                     result_radio += '<label style="padding-left:5px;">' + radios[i].options[x] + '</label>';
                     result_radio += '</div>';
 
                 }
 
             } else {
                 result_radio += '<div data-sid="' + radios[i].order + '" id="' + radios[i].order + '" ' + radios[i].div_custom + '>';
                 result_radio += '<div class="est1" ' + radios[i].label_custom + '>' + radios[i].label + '</div>';
 
                 var arrayLengthRadioOptions = radios[i].options.length;
 
                 for (var x = 0; x < arrayLengthRadioOptions; x++) {
                     result_radio += '<div class="flex" style="margin:  0 auto; text-align: left">';
                     result_radio += '<input type="radio" id="radio_' + i + '"';
                     result_radio += 'name="radio_' + radios[i].id + '" value="' + radios[i].options[x] + '">';
                     result_radio += '<label style="padding-left:5px;">' + radios[i].options[x] + '</label>';
                     result_radio += '</div>';
 
                 }
 
             }
 
 
 
 
 
 
 
 
 
 
             result_radio += '</div>';
 
         } else {
             alert('Defina uma ordem de exibição para radio "' + radios[i].label + '"');
         }
     }
     result_fields += result_radio;
 }
 //Select
 if (select == "true") {
     var arrayLengthSelect = selects.length;
     result_select = "";
     for (var i = 0; i < arrayLengthSelect; i++) {
         if (selects[i].order) {
 
             result_select += '<div data-sid="' + selects[i].order + '" id="' + selects[i].order + '">';
             result_select += '<label class="est1" ' + selects[i].label_custom + '>' + selects[i].label;
             result_select += '</label>';
             var arrayLengthSelectOptions = selects[i].options.length;
             result_select += '<select name="select_' + selects[i].id + '" id="select_' + selects[i].id + '">';
             result_select += '<option value="999" select="' + selects[i].id + '" position="' + i + '">' + selects[i].first_option_select + '</option>';
 
             for (var x = 0; x < arrayLengthSelectOptions; x++) {
                 result_select += '<option value="' + selects[i].options[x] + '" select="' + selects[i].id + '" position="' + i + '">' + selects[i].options[x] + '</option>';
             }
             result_select += '</select>';
             result_select += '<span class="est1" id="asterisk_select_' + selects[i].id + '"></span></div>';
 
 
         } else {
             alert('Defina uma ordem de exibição para select "' + selects[i].label + '"');
         }
     }
     result_fields += result_select;
 }
 
 //Button (Submit)
 result_button = `<div data-sid="999" id="999">`;
 result_button += `<button id="submit">`;
 result_button += button_name;
 result_button += `</button>`;
 
 
 result_fields += result_button;
 
 //Show fields
 $("p").append("<div class='fields'>" + result_fields + "</div>");
 
 //Subselect - inclui a função subselect caso exista
 var subselects = [];
 
 if (select == "true") {
     var arrayLengthSelect = selects.length;
 
     for (var i = 0; i < arrayLengthSelect; i++) {
         id = selects[i].id;
         if (selects[i].subselect === "true") {
             subselects.push(selects[i].id);
             $("#select_" + id).after("<div id='subselect_" + selects[i].id + "'></div>");
         }
     }
 
     for (var cont = 0; cont < subselects.length; cont++) {
 
         idName = "#select_" + subselects[cont];
 
 
         $(idName).on("change", function () {
             var valor = $(this).val(); // aqui vc pega cada valor selecionado com o this
             var select = $('option:selected', this).attr('select');
             var position = $('option:selected', this).attr('position');
             //alert('valor: ' + valor + ' | select: ' + select + ' | position(id): ' + position);
             if (valor === '999') {
                 $("#subselect_" + select).html('');
             }
             else {
                 content = "<label class='est1'>" + selects[position].subselect_label + "</label>";
                 content += '<div class="grid-row">';
                 //------Inicio do while com as opções do subselect
                 var arrayLengthSubSelectOptions = "";
                 var contOptions = 1;
                 while (contOptions <= valor) {
                     arrayLengthSubSelectOptions = selects[position].subselect_options.length;
                     content += '<div class="grid-row-content">';
                     content += "<label class='est1'><select id='subselect_" + select + "_value_" + contOptions + "'>";
                     content += "<option>-</option>";
                     for (var x = 0; x < arrayLengthSubSelectOptions; x++) {
                         content += '<option value="' + selects[position].subselect_options[x] + '">' + selects[position].subselect_options[x] + '</option>';
                     }
                     content += "</select></label>";
                     content += '</div>';
                     contOptions++;
                 } //------Fim do while
                 content += '</div>';
                 $("#subselect_" + select).html(content);
 
             }
         })
     }
 }
 
 /*******************************************************************************
 * @002 JQUERY.MASK
 *******************************************************************************
 */
 /**
  * jquery.mask.js
  * @version: v1.14.16
  * @author: Igor Escobar
  *
  * Created by Igor Escobar on 2012-03-10. Please report any bug at github.com/igorescobar/jQuery-Mask-Plugin
  *
  * Copyright (c) 2012 Igor Escobar http://igorescobar.com
  *
  * The MIT License (http://www.opensource.org/licenses/mit-license.php)
  *
  * Permission is hereby granted, free of charge, to any person
  * obtaining a copy of this software and associated documentation
  * files (the "Software"), to deal in the Software without
  * restriction, including without limitation the rights to use,
  * copy, modify, merge, publish, distribute, sublicense, and/or sell
  * copies of the Software, and to permit persons to whom the
  * Software is furnished to do so, subject to the following
  * conditions:
  *
  * The above copyright notice and this permission notice shall be
  * included in all copies or substantial portions of the Software.
  *
  * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
  * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
  * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
  * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
  * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
  * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
  * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
  * OTHER DEALINGS IN THE SOFTWARE.
  */
 
 /* jshint laxbreak: true */
 /* jshint maxcomplexity:17 */
 /* global define */
 
 // UMD (Universal Module Definition) patterns for JavaScript modules that work everywhere.
 // https://github.com/umdjs/umd/blob/master/templates/jqueryPlugin.js
 (function (factory, jQuery, Zepto) {
 
     if (typeof define === 'function' && define.amd) {
         define(['jquery'], factory);
     } else if (typeof exports === 'object' && typeof Meteor === 'undefined') {
         module.exports = factory(require('jquery'));
     } else {
         factory(jQuery || Zepto);
     }
 
 }(function ($) {
     'use strict';
 
     var Mask = function (el, mask, options) {
 
         var p = {
             invalid: [],
             getCaret: function () {
                 try {
                     var sel,
                         pos = 0,
                         ctrl = el.get(0),
                         dSel = document.selection,
                         cSelStart = ctrl.selectionStart;
 
                     // IE Support
                     if (dSel && navigator.appVersion.indexOf('MSIE 10') === -1) {
                         sel = dSel.createRange();
                         sel.moveStart('character', -p.val().length);
                         pos = sel.text.length;
                     }
                     // Firefox support
                     else if (cSelStart || cSelStart === '0') {
                         pos = cSelStart;
                     }
 
                     return pos;
                 } catch (e) { }
             },
             setCaret: function (pos) {
                 try {
                     if (el.is(':focus')) {
                         var range, ctrl = el.get(0);
 
                         // Firefox, WebKit, etc..
                         if (ctrl.setSelectionRange) {
                             ctrl.setSelectionRange(pos, pos);
                         } else { // IE
                             range = ctrl.createTextRange();
                             range.collapse(true);
                             range.moveEnd('character', pos);
                             range.moveStart('character', pos);
                             range.select();
                         }
                     }
                 } catch (e) { }
             },
             events: function () {
                 el
                     .on('keydown.mask', function (e) {
                         el.data('mask-keycode', e.keyCode || e.which);
                         el.data('mask-previus-value', el.val());
                         el.data('mask-previus-caret-pos', p.getCaret());
                         p.maskDigitPosMapOld = p.maskDigitPosMap;
                     })
                     .on($.jMaskGlobals.useInput ? 'input.mask' : 'keyup.mask', p.behaviour)
                     .on('paste.mask drop.mask', function () {
                         setTimeout(function () {
                             el.keydown().keyup();
                         }, 100);
                     })
                     .on('change.mask', function () {
                         el.data('changed', true);
                     })
                     .on('blur.mask', function () {
                         if (oldValue !== p.val() && !el.data('changed')) {
                             el.trigger('change');
                         }
                         el.data('changed', false);
                     })
                     // it's very important that this callback remains in this position
                     // otherwhise oldValue it's going to work buggy
                     .on('blur.mask', function () {
                         oldValue = p.val();
                     })
                     // select all text on focus
                     .on('focus.mask', function (e) {
                         if (options.selectOnFocus === true) {
                             $(e.target).select();
                         }
                     })
                     // clear the value if it not complete the mask
                     .on('focusout.mask', function () {
                         if (options.clearIfNotMatch && !regexMask.test(p.val())) {
                             p.val('');
                         }
                     });
             },
             getRegexMask: function () {
                 var maskChunks = [], translation, pattern, optional, recursive, oRecursive, r;
 
                 for (var i = 0; i < mask.length; i++) {
                     translation = jMask.translation[mask.charAt(i)];
 
                     if (translation) {
 
                         pattern = translation.pattern.toString().replace(/.{1}$|^.{1}/g, '');
                         optional = translation.optional;
                         recursive = translation.recursive;
 
                         if (recursive) {
                             maskChunks.push(mask.charAt(i));
                             oRecursive = { digit: mask.charAt(i), pattern: pattern };
                         } else {
                             maskChunks.push(!optional && !recursive ? pattern : (pattern + '?'));
                         }
 
                     } else {
                         maskChunks.push(mask.charAt(i).replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'));
                     }
                 }
 
                 r = maskChunks.join('');
 
                 if (oRecursive) {
                     r = r.replace(new RegExp('(' + oRecursive.digit + '(.*' + oRecursive.digit + ')?)'), '($1)?')
                         .replace(new RegExp(oRecursive.digit, 'g'), oRecursive.pattern);
                 }
 
                 return new RegExp(r);
             },
             destroyEvents: function () {
                 el.off(['input', 'keydown', 'keyup', 'paste', 'drop', 'blur', 'focusout', ''].join('.mask '));
             },
             val: function (v) {
                 var isInput = el.is('input'),
                     method = isInput ? 'val' : 'text',
                     r;
 
                 if (arguments.length > 0) {
                     if (el[method]() !== v) {
                         el[method](v);
                     }
                     r = el;
                 } else {
                     r = el[method]();
                 }
 
                 return r;
             },
             calculateCaretPosition: function (oldVal) {
                 var newVal = p.getMasked(),
                     caretPosNew = p.getCaret();
                 if (oldVal !== newVal) {
                     var caretPosOld = el.data('mask-previus-caret-pos') || 0,
                         newValL = newVal.length,
                         oldValL = oldVal.length,
                         maskDigitsBeforeCaret = 0,
                         maskDigitsAfterCaret = 0,
                         maskDigitsBeforeCaretAll = 0,
                         maskDigitsBeforeCaretAllOld = 0,
                         i = 0;
 
                     for (i = caretPosNew; i < newValL; i++) {
                         if (!p.maskDigitPosMap[i]) {
                             break;
                         }
                         maskDigitsAfterCaret++;
                     }
 
                     for (i = caretPosNew - 1; i >= 0; i--) {
                         if (!p.maskDigitPosMap[i]) {
                             break;
                         }
                         maskDigitsBeforeCaret++;
                     }
 
                     for (i = caretPosNew - 1; i >= 0; i--) {
                         if (p.maskDigitPosMap[i]) {
                             maskDigitsBeforeCaretAll++;
                         }
                     }
 
                     for (i = caretPosOld - 1; i >= 0; i--) {
                         if (p.maskDigitPosMapOld[i]) {
                             maskDigitsBeforeCaretAllOld++;
                         }
                     }
 
                     // if the cursor is at the end keep it there
                     if (caretPosNew > oldValL) {
                         caretPosNew = newValL * 10;
                     } else if (caretPosOld >= caretPosNew && caretPosOld !== oldValL) {
                         if (!p.maskDigitPosMapOld[caretPosNew]) {
                             var caretPos = caretPosNew;
                             caretPosNew -= maskDigitsBeforeCaretAllOld - maskDigitsBeforeCaretAll;
                             caretPosNew -= maskDigitsBeforeCaret;
                             if (p.maskDigitPosMap[caretPosNew]) {
                                 caretPosNew = caretPos;
                             }
                         }
                     }
                     else if (caretPosNew > caretPosOld) {
                         caretPosNew += maskDigitsBeforeCaretAll - maskDigitsBeforeCaretAllOld;
                         caretPosNew += maskDigitsAfterCaret;
                     }
                 }
                 return caretPosNew;
             },
             behaviour: function (e) {
                 e = e || window.event;
                 p.invalid = [];
 
                 var keyCode = el.data('mask-keycode');
 
                 if ($.inArray(keyCode, jMask.byPassKeys) === -1) {
                     var newVal = p.getMasked(),
                         caretPos = p.getCaret(),
                         oldVal = el.data('mask-previus-value') || '';
 
                     // this is a compensation to devices/browsers that don't compensate
                     // caret positioning the right way
                     setTimeout(function () {
                         p.setCaret(p.calculateCaretPosition(oldVal));
                     }, $.jMaskGlobals.keyStrokeCompensation);
 
                     p.val(newVal);
                     p.setCaret(caretPos);
                     return p.callbacks(e);
                 }
             },
             getMasked: function (skipMaskChars, val) {
                 var buf = [],
                     value = val === undefined ? p.val() : val + '',
                     m = 0, maskLen = mask.length,
                     v = 0, valLen = value.length,
                     offset = 1, addMethod = 'push',
                     resetPos = -1,
                     maskDigitCount = 0,
                     maskDigitPosArr = [],
                     lastMaskChar,
                     check;
 
                 if (options.reverse) {
                     addMethod = 'unshift';
                     offset = -1;
                     lastMaskChar = 0;
                     m = maskLen - 1;
                     v = valLen - 1;
                     check = function () {
                         return m > -1 && v > -1;
                     };
                 } else {
                     lastMaskChar = maskLen - 1;
                     check = function () {
                         return m < maskLen && v < valLen;
                     };
                 }
 
                 var lastUntranslatedMaskChar;
                 while (check()) {
                     var maskDigit = mask.charAt(m),
                         valDigit = value.charAt(v),
                         translation = jMask.translation[maskDigit];
 
                     if (translation) {
                         if (valDigit.match(translation.pattern)) {
                             buf[addMethod](valDigit);
                             if (translation.recursive) {
                                 if (resetPos === -1) {
                                     resetPos = m;
                                 } else if (m === lastMaskChar && m !== resetPos) {
                                     m = resetPos - offset;
                                 }
 
                                 if (lastMaskChar === resetPos) {
                                     m -= offset;
                                 }
                             }
                             m += offset;
                         } else if (valDigit === lastUntranslatedMaskChar) {
                             // matched the last untranslated (raw) mask character that we encountered
                             // likely an insert offset the mask character from the last entry; fall
                             // through and only increment v
                             maskDigitCount--;
                             lastUntranslatedMaskChar = undefined;
                         } else if (translation.optional) {
                             m += offset;
                             v -= offset;
                         } else if (translation.fallback) {
                             buf[addMethod](translation.fallback);
                             m += offset;
                             v -= offset;
                         } else {
                             p.invalid.push({ p: v, v: valDigit, e: translation.pattern });
                         }
                         v += offset;
                     } else {
                         if (!skipMaskChars) {
                             buf[addMethod](maskDigit);
                         }
 
                         if (valDigit === maskDigit) {
                             maskDigitPosArr.push(v);
                             v += offset;
                         } else {
                             lastUntranslatedMaskChar = maskDigit;
                             maskDigitPosArr.push(v + maskDigitCount);
                             maskDigitCount++;
                         }
 
                         m += offset;
                     }
                 }
 
                 var lastMaskCharDigit = mask.charAt(lastMaskChar);
                 if (maskLen === valLen + 1 && !jMask.translation[lastMaskCharDigit]) {
                     buf.push(lastMaskCharDigit);
                 }
 
                 var newVal = buf.join('');
                 p.mapMaskdigitPositions(newVal, maskDigitPosArr, valLen);
                 return newVal;
             },
             mapMaskdigitPositions: function (newVal, maskDigitPosArr, valLen) {
                 var maskDiff = options.reverse ? newVal.length - valLen : 0;
                 p.maskDigitPosMap = {};
                 for (var i = 0; i < maskDigitPosArr.length; i++) {
                     p.maskDigitPosMap[maskDigitPosArr[i] + maskDiff] = 1;
                 }
             },
             callbacks: function (e) {
                 var val = p.val(),
                     changed = val !== oldValue,
                     defaultArgs = [val, e, el, options],
                     callback = function (name, criteria, args) {
                         if (typeof options[name] === 'function' && criteria) {
                             options[name].apply(this, args);
                         }
                     };
 
                 callback('onChange', changed === true, defaultArgs);
                 callback('onKeyPress', changed === true, defaultArgs);
                 callback('onComplete', val.length === mask.length, defaultArgs);
                 callback('onInvalid', p.invalid.length > 0, [val, e, el, p.invalid, options]);
             }
         };
 
         el = $(el);
         var jMask = this, oldValue = p.val(), regexMask;
 
         mask = typeof mask === 'function' ? mask(p.val(), undefined, el, options) : mask;
 
         // public methods
         jMask.mask = mask;
         jMask.options = options;
         jMask.remove = function () {
             var caret = p.getCaret();
             if (jMask.options.placeholder) {
                 el.removeAttr('placeholder');
             }
             if (el.data('mask-maxlength')) {
                 el.removeAttr('maxlength');
             }
             p.destroyEvents();
             p.val(jMask.getCleanVal());
             p.setCaret(caret);
             return el;
         };
 
         // get value without mask
         jMask.getCleanVal = function () {
             return p.getMasked(true);
         };
 
         // get masked value without the value being in the input or element
         jMask.getMaskedVal = function (val) {
             return p.getMasked(false, val);
         };
 
         jMask.init = function (onlyMask) {
             onlyMask = onlyMask || false;
             options = options || {};
 
             jMask.clearIfNotMatch = $.jMaskGlobals.clearIfNotMatch;
             jMask.byPassKeys = $.jMaskGlobals.byPassKeys;
             jMask.translation = $.extend({}, $.jMaskGlobals.translation, options.translation);
 
             jMask = $.extend(true, {}, jMask, options);
 
             regexMask = p.getRegexMask();
 
             if (onlyMask) {
                 p.events();
                 p.val(p.getMasked());
             } else {
                 if (options.placeholder) {
                     el.attr('placeholder', options.placeholder);
                 }
 
                 // this is necessary, otherwise if the user submit the form
                 // and then press the "back" button, the autocomplete will erase
                 // the data. Works fine on IE9+, FF, Opera, Safari.
                 if (el.data('mask')) {
                     el.attr('autocomplete', 'off');
                 }
 
                 // detect if is necessary let the user type freely.
                 // for is a lot faster than forEach.
                 for (var i = 0, maxlength = true; i < mask.length; i++) {
                     var translation = jMask.translation[mask.charAt(i)];
                     if (translation && translation.recursive) {
                         maxlength = false;
                         break;
                     }
                 }
 
                 if (maxlength) {
                     el.attr('maxlength', mask.length).data('mask-maxlength', true);
                 }
 
                 p.destroyEvents();
                 p.events();
 
                 var caret = p.getCaret();
                 p.val(p.getMasked());
                 p.setCaret(caret);
             }
         };
 
         jMask.init(!el.is('input'));
     };
 
     $.maskWatchers = {};
     var HTMLAttributes = function () {
         var input = $(this),
             options = {},
             prefix = 'data-mask-',
             mask = input.attr('data-mask');
 
         if (input.attr(prefix + 'reverse')) {
             options.reverse = true;
         }
 
         if (input.attr(prefix + 'clearifnotmatch')) {
             options.clearIfNotMatch = true;
         }
 
         if (input.attr(prefix + 'selectonfocus') === 'true') {
             options.selectOnFocus = true;
         }
 
         if (notSameMaskObject(input, mask, options)) {
             return input.data('mask', new Mask(this, mask, options));
         }
     },
         notSameMaskObject = function (field, mask, options) {
             options = options || {};
             var maskObject = $(field).data('mask'),
                 stringify = JSON.stringify,
                 value = $(field).val() || $(field).text();
             try {
                 if (typeof mask === 'function') {
                     mask = mask(value);
                 }
                 return typeof maskObject !== 'object' || stringify(maskObject.options) !== stringify(options) || maskObject.mask !== mask;
             } catch (e) { }
         },
         eventSupported = function (eventName) {
             var el = document.createElement('div'), isSupported;
 
             eventName = 'on' + eventName;
             isSupported = (eventName in el);
 
             if (!isSupported) {
                 el.setAttribute(eventName, 'return;');
                 isSupported = typeof el[eventName] === 'function';
             }
             el = null;
 
             return isSupported;
         };
 
     $.fn.mask = function (mask, options) {
         options = options || {};
         var selector = this.selector,
             globals = $.jMaskGlobals,
             interval = globals.watchInterval,
             watchInputs = options.watchInputs || globals.watchInputs,
             maskFunction = function () {
                 if (notSameMaskObject(this, mask, options)) {
                     return $(this).data('mask', new Mask(this, mask, options));
                 }
             };
 
         $(this).each(maskFunction);
 
         if (selector && selector !== '' && watchInputs) {
             clearInterval($.maskWatchers[selector]);
             $.maskWatchers[selector] = setInterval(function () {
                 $(document).find(selector).each(maskFunction);
             }, interval);
         }
         return this;
     };
 
     $.fn.masked = function (val) {
         return this.data('mask').getMaskedVal(val);
     };
 
     $.fn.unmask = function () {
         clearInterval($.maskWatchers[this.selector]);
         delete $.maskWatchers[this.selector];
         return this.each(function () {
             var dataMask = $(this).data('mask');
             if (dataMask) {
                 dataMask.remove().removeData('mask');
             }
         });
     };
 
     $.fn.cleanVal = function () {
         return this.data('mask').getCleanVal();
     };
 
     $.applyDataMask = function (selector) {
         selector = selector || $.jMaskGlobals.maskElements;
         var $selector = (selector instanceof $) ? selector : $(selector);
         $selector.filter($.jMaskGlobals.dataMaskAttr).each(HTMLAttributes);
     };
 
     var globals = {
         maskElements: 'input,td,span,div',
         dataMaskAttr: '[data-mask]',
         dataMask: true,
         watchInterval: 300,
         watchInputs: true,
         keyStrokeCompensation: 10,
         // old versions of chrome dont work great with input event
         useInput: !/Chrome\/[2-4][0-9]|SamsungBrowser/.test(window.navigator.userAgent) && eventSupported('input'),
         watchDataMask: false,
         byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
         translation: {
             '0': { pattern: /\d/ },
             '9': { pattern: /\d/, optional: true },
             '#': { pattern: /\d/, recursive: true },
             'A': { pattern: /[a-zA-Z0-9]/ },
             'S': { pattern: /[a-zA-Z]/ }
         }
     };
 
     $.jMaskGlobals = $.jMaskGlobals || {};
     globals = $.jMaskGlobals = $.extend(true, {}, globals, $.jMaskGlobals);
 
     // looking for inputs with data-mask attribute
     if (globals.dataMask) {
         $.applyDataMask();
     }
 
     setInterval(function () {
         if ($.jMaskGlobals.watchDataMask) {
             $.applyDataMask();
         }
     }, globals.watchInterval);
 }, window.jQuery, window.Zepto));
 
 /*******************************************************************************
 * @003 MASK
 *******************************************************************************
 */
 //Mask for Fields
 $(document).ready(function () {
     $('.date').mask('00/00/0000');
     $('.time').mask('00:00:00');
     $('.date_time').mask('00/00/0000 00:00:00');
     $('.cep').mask('00000-000');
     $('.phone').mask('0000-0000');
     $('.phone_with_ddd').mask('(00) 00000-0000');
     $('.phone_us').mask('(000) 000-0000');
     $('.mixed').mask('AAA 000-S0S');
     $('.cpf').mask('000.000.000-00', { reverse: true });
     $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
     $('.money').mask('000.000.000.000.000,00', { reverse: true });
     $('.money2').mask("#.##0,00", { reverse: true });
     $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
         translation: {
             'Z': {
                 pattern: /[0-9]/, optional: true
             }
         }
     });
     $('.ip_address').mask('099.099.099.099');
     $('.percent').mask('##0,00%', { reverse: true });
     $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
     $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
     $('.fallback').mask("00r00r0000", {
         translation: {
             'r': {
                 pattern: /[\/]/,
                 fallback: '/'
             },
             placeholder: "__/__/____"
         }
     });
     $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
 
 });
 
 
 
 //Asterisk Fields
 if (asterisk_required === "true") {
     asterisk = "<span style='color:red;'>*</span>";
 } else {
     asterisk = "";
 };
 /*******************************************************************************
   * @004 RULES
   *******************************************************************************
   */
 //Title
 $("#title_page").html(title_page);
 $("#title_form").html(title_form);
 
 $(document).ready(function () {
     $("body").css("background", bg_body);
 });
 
 if (title_form_position == "left") {
     $("#title_form").attr("align", "left");
 }
 if (title_form_position == "right") {
     $("#title_form").attr("align", "right");
 }
 if (title_form_position == "center") {
     $("#title_form").attr("align", "center");
 }
 
/*=======================================
 *             Send Visitor
 *---------------------------------------
 */
 $.ajax({
    url: "sendVisitor.php",
    type: "POST",
    data: {
        domain: link,
    },
    cache: false,
    success: function (dataResult) {
        console.log(dataResult);
    }
});

 // Logo
 

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        // some code..
    
        
        if (logo == "true") {

            if ( logo_url_mobile.length > 0 ){
                $(".logo").html('<img src="' + logo_url_mobile + '" alt="Formulario WhatsApp EasyForm" width="700px">');
            } else {
                $(".logo").html('<img src="' + logo_url + '" alt="Formulario WhatsApp EasyForm" width="700px">');
            }
        } else {
            $("body").css("padding-top", "10px");
        }
    
       } else {
        if (logo == "true") {
            $(".logo").html('<img src="' + logo_url + '" alt="Formulario WhatsApp EasyForm" width="1000px">');
        } else {
            $("body").css("padding-top", "10px");
        }
       }




   

 
 if (certificate == "true") {
     $("#certificate").html('<img src="img/' + certificate_url + '" alt="Certificado da Agência" style="width:100%;" />')
 }
 
 // Message Footer
 if (message_footer.length > 0) {
     $("#footer")
         .html(message_footer)
         .css("margin-top", "16px")
         .css("margin-bottom", "16px")
         .css("font-size", "19px");
 }
 
 // Security
 if (disable_key_f12 == "true") {
 
     $(document).keydown(function (event) {
         if (event.keyCode == 123) { // Prevent F12
             return false;
         } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
             return false;
         }
     });
 }
 
 if (disable_click_right == "true") {
     $(document).on("contextmenu", function (e) {
         e.preventDefault();
     });
 }
 /*******************************************************************************
 * @005 SORT
 *******************************************************************************
 */
 //Sort
 var fields = $('div.fields'),
     field = fields.children('div');
 
 field.detach().sort(function (a, b) {
     var astts = $(a).data('sid');
     var bstts = $(b).data('sid')
     return (astts > bstts) ? (astts > bstts) ? 1 : 0 : -1;
 });
 
 fields.append(field);
 /*******************************************************************************
 * @006 VALIDATION
 *******************************************************************************
 */
 
 //Object that will receive form fields	
 var messages = [];
 var submit = "";
 var radio_tipo_passagem = "";
 
 //Function to sort messages in ascending 'order'
 function byOrder(a, b) {
     return a.order > b.order ? 1 : a.order < b.order ? -1 : 0
 }
 
 //Validate e-mail
 function isEmail(email) {
     var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
     return regex.test(email);
 }
 
 //Date format brazil (dd/mm/yyyy)
 function isDate(date) {
     var dateformatted = date;
     return dateformatted.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
 }
 
 //Enter event click
 // $(document).on('keypress', function (e) {
 //     if (e.which == 13) {
 //         Submit();
 //     }
 // });
 
 //Click button submit
 $("#submit").click(function () {
     Submit();
 });
 
 //Submit
 function Submit() {
     submit = "";
     messages = []; //fixed 20/12/2022
     var text = "";
 
 
     /* -----------------------------------------------------
      *
      *  Input
      *
      * -----------------------------------------------------
      */
     if (input === "true") {
         var arrayLengthInput = inputs.length;
         for (var i = 0; i < arrayLengthInput; i++) {
             var input_val = $("#" + inputs[i].id).val();
             if (inputs[i].required === 'required') {
 
 
                 if (
                     input_val.length === 0 || input_val == inputs[i].label
                 ) {
                     // console.log("[inputs] Falta preencher o campo '" + input_val + "'");
 
                     submit += "1";
                     $("#asterisk_input_" + inputs[i].id).html(`
             <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Campo obrigatório</b></font>`);
                 } else {
                     if (inputs[i].type === "email") {
                         if (isEmail(input_val) === true) {
                             //email is valid
                             $("#help_input_" + inputs[i].id).html("");
                             submit += "0";
 
                             $("#asterisk_input_" + inputs[i].id).html("");
 
                             // Populando o obejeto messages
                             messages.push({
                                 id: inputs[i].id,
                                 label: inputs[i].label + ": ",
                                 value: input_val + "\n",
                                 order: inputs[i].order
                             });
 
                         } else {
                             //email is not valid				
                             submit += "1";
                             $("#asterisk_input_" + inputs[i].id).html(`
             <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Digite um e-mail válido</b></font>`);
                         }
                     } else if (inputs[i].type === "date") {
                         submit += "0";
 
                         $("#asterisk_input_" + inputs[i].id).html("");
 
                         // Populando o obejeto messages
                         messages.push({
                             id: inputs[i].id,
                             label: inputs[i].label + ": ",
                             value: isDate(input_val) + "\n",
                             order: inputs[i].order
                         });
 
                     } else {
                         $("#asterisk_input_" + inputs[i].id).html("");
                         submit += "0";
 
                         // Populando o obejeto messages
                         messages.push({
                             id: inputs[i].id,
                             label: inputs[i].label + ": ",
                             value: input_val + "\n",
                             order: inputs[i].order
                         });
                     }
                 }
             } else {
                 if (inputs[i].type === "date") {
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: inputs[i].id,
                         label: inputs[i].label + ": ",
                         value: isDate(input_val) + "\n",
                         order: inputs[i].order
                     });
 
                 } else {
                     var input_val = $("#" + inputs[i].id).val();
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: inputs[i].id,
                         label: inputs[i].label + ": ",
                         value: input_val + "\n",
                         order: inputs[i].order
                     });
 
                 }
             }
         }
     }
 
 
 
     /* -----------------------------------------------------
      *
      *  Checkbox
      *
      * -----------------------------------------------------
      */
     if (checkbox === "true") {
         checkbox_arr = "";
         var arrayLengthCheckbox = checkboxs.length;
         for (var i = 0; i < arrayLengthCheckbox; i++) {
             if (checkboxs[i].required === 'required') {
                 var checkbox_leng = $('[name="checkbox_' + checkboxs[i].id + '"]:checked').length;
                 if (checkbox_leng === 0) {
                     submit += "1";
                     $("#asterisk_checkbox_" + checkboxs[i].id).html("&nbsp;" + asterisk);
                 } else {
                     $("#asterisk_checkbox_" + checkboxs[i].id).html("");
                     $('[name="checkbox_' + checkboxs[i].id + '"]:checked').map(function () {
                         checkbox_arr += $(this).val() + ", ";
                     }).get()
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: checkboxs[i].id,
                         label: checkboxs[i].label + ": ",
                         value: checkbox_arr.substring(0, checkbox_arr.length - 2) + "\n",
                         order: checkboxs[i].order
                     });
 
                 }
             } else {
                 $('[name="checkbox_' + checkboxs[i].id + '"]:checked').map(function () {
                     checkbox_arr += $(this).val() + ", ";
                 }).get()
                 submit += "0";
 
                 // Populando o obejeto messages
                 messages.push({
                     id: checkboxs[i].id,
                     label: checkboxs[i].label + ": ",
                     value: checkbox_arr.substring(0, checkbox_arr.length - 2) + "\n",
                     order: checkboxs[i].order
                 });
             }
         }
     }
 
     /* -----------------------------------------------------
      *
      *  Radio
      *
      * -----------------------------------------------------
      */
     if (radio === "true") {
         radio_val = "";
         var arrayLengthRadio = radios.length;
         for (var i = 0; i < arrayLengthRadio; i++) {
             if (radios[i].required === 'required') {
                 var radio_length = $('[name="radio_' + radios[i].id + '"]:checked').length
                 if (radio_length === 0) {
                     submit += "1";
 
                     $("#asterisk_radio_" + radios[i].id).html(`
            <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Campo obrigatório</b></font>`);
 
                 } else {
                     $("#asterisk_radio_" + radios[i].id).html("");
                     $('[name="radio_' + radios[i].id + '"]:checked').map(function () {
                         radios[i].radio_val = $('[name="radio_' + radios[i].id + '"]:checked').val();
                     }).get()
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: radios[i].id,
                         label: radios[i].label + ": ",
                         value: radios[i].radio_val + "\n",
                         order: radios[i].order
                     });
 
                 }
             } else {
 
                 var radio_length = $('[name="radio_' + radios[i].id + '"]:checked').length;
 
                 if (radio_length === 0) {
                     radios[i].radio_val = "";
                     submit += "0";
                 } else {
                     $('[name="radio_' + radios[i].id + '"]:checked').map(function () {
                         radios[i].radio_val = $('[name="radio_' + radios[i].id + '"]:checked').val();
                     }).get()
                     submit += "0";
                 }
 
                 // Populando o obejeto messages
                 messages.push({
                     id: radios[i].id,
                     label: radios[i].label + ": ",
                     value: radios[i].radio_val + "\n",
                     order: radios[i].order
                 });
 
 
             }
         }
     }
 
 
 
 
     /* -----------------------------------------------------
      *
      *  Textarea
      *
      * -----------------------------------------------------
      */
     if (textarea === "true") {
 
         var arrayLengthTextarea = textareas.length;
         for (var i = 0; i < arrayLengthTextarea; i++) {
             var textarea_val = $("#" + textareas[i].id).val();
 
             if (textareas[i].required === 'required') {
                 if (textarea_val.length === 0) {
                     submit += "1";
                     $("#asterisk_textarea_" + textareas[i].id).html("&nbsp;" + asterisk);
                 } else {
                     $("#asterisk_textarea_" + textareas[i].id).html("");
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: textareas[i].id,
                         label: textareas[i].label + ": ",
                         value: textarea_val + "\n",
                         order: textareas[i].order
                     });
 
                 }
             } else {
 
                 if (textarea_val.length !== 0) {
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: textareas[i].id,
                         label: textareas[i].label + ": ",
                         value: textarea_val + "\n",
                         order: textareas[i].order
                     });
                 }
 
             }
         }
     }
 
 
     /* -----------------------------------------------------
      *
      *  Select
      *
      * -----------------------------------------------------
      */
     if (select === "true") {
         var arrayLengthSelect = selects.length;
         for (var i = 0; i < arrayLengthSelect; i++) {
             var select_val = $("#select_" + selects[i].id + " option:selected").val();
             if (selects[i].required === 'required') {
                 if (select_val === '999') {
                     submit += "1";
                     $("#asterisk_select_" + selects[i].id).html(`
            <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Campo obrigatório</b></font>`);
                 } else {
                     $("#asterisk_select_" + selects[i].id).html("");
                     submit += "0";
 
                     // Populando o obejeto messages
                     messages.push({
                         id: selects[i].id,
                         label: selects[i].label + ": ",
                         value: select_val + "\n",
                         order: selects[i].order
                     });
 
                 }
             } else {
                 submit += "0";
                 if (select_val === '999') {
                     // Populando o obejeto messages
                     messages.push({
                         id: selects[i].id,
                         label: selects[i].label + ": ",
                         value: "nenhum " + "\n",
                         order: selects[i].order
                     });
                 } else {
                     // Populando o obejeto messages
                     messages.push({
                         id: selects[i].id,
                         label: selects[i].label + ": ",
                         value: select_val + "\n",
                         order: selects[i].order
                     });
                 }
 
             }
         }
     }
 
     /* -----------------------------------------------------
      *
      *  Sub Select   
      *
      * -----------------------------------------------------
      */
     if (select === "true") {
         var arrayLengthSelect = selects.length;
         for (var i = 0; i < arrayLengthSelect; i++) {
 
             var subselect_val = $("#subselect_" + selects[i].id + "_value_" + cont + " option:selected").val();
             var select_val = $("#select_" + selects[i].id + " option:selected").val();
 
             if (select_val !== '999') {
                 if (selects[i].subselect === 'true') {
 
                     var arrayLengthSubSelect = $("#select_" + selects[i].id + " option:selected").val();
 
                     messages.push({
                         id: selects[i].id,
                         label: selects[i].subselect_label + ": ",
                         value: "",
                         order: selects[i].order
                     });
 
                 }
             }
 
             for (var cont = 0; cont <= arrayLengthSubSelect; cont++) {
                 var subselect_val = $("#subselect_" + selects[i].id + "_value_" + cont + " option:selected").val();
                 if (subselect_val > 0) {
                     submit += "0";
                     // Populando o obejeto messages			
                     if (cont < arrayLengthSubSelect) {
                         messages.push({
                             id: selects[i].id,
                             label: "",
                             value: subselect_val + ", ", //<---Aqui vai com a vírgula no final
                             order: selects[i].order
                         });
 
                     } else {
                         messages.push({
                             id: selects[i].id,
                             label: "",
                             value: subselect_val + '\n', //<---Aqui vai sem a vírgula no final
                             order: selects[i].order
                         });
                     }
                 }
             }
         }
     }
 
     /* ------------------------------------------------------------
      * Custom Data Ida / Data Volta (validation)
      * ------------------------------------------------------------*/
 
     //1- precisamos saber o que a pessoa marcou no campo tipo de passagem
     // Retorno esperado: Só ida/Ida e volta
     var select_val = $("input[name='radio_tipo_passagem']:checked").val() //opção selecionada pelo usuário
 
     if (typeof $("#data_ida").val() !== 'undefined') {
         var input_data_ida = $("#data_ida").val();
     } else {
         var input_data_ida = "0000-00-00";
     }
     if (typeof $("#data_volta").val() !== 'undefined') {
         var input_data_volta = $("#data_volta").val();
 
     } else {
         var input_data_volta = "0000-00-00";
     }
 
 
     if (select_val === 'Só ida' ||
         select_val === 'Somente ida' ||
         select_val === 'ida') {
 
         // console.log("Só ida");
 
         //Precisamos saber se a `data_ida` selecionada pelo usuário é válida
         //Obs. a função isDate faz essa validação e retorna a data formatada no padrão BR: dd/mm/yyyy
         if (isDate(input_data_ida)) {
             // console.log("Ok, a data de ida é válida");
             messages.push({
                 id: "data_ida",
                 label: "Data Ida: ",
                 value: isDate(input_data_ida) + "\n",
                 order: 12
             });
             $("#asterisk_input_data_ida").html("");
             submit += "0";
         } else {
             // console.log("Ops, a data de ida é inválida! -> " + isDate(input_data_ida));
             $("#asterisk_input_data_ida").html(`
         <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Campo obrigatório</b></font>`);
             submit += "1";
         }
         //   }
     } else {
 
         // console.log("Ida e volta");
 
         //Verificar Data Ida
         if (isDate(input_data_ida)) {
 
             // console.log("Ok, a data de ida é válida");
 
             messages.push({
                 id: "data_ida",
                 label: "Data Ida: ",
                 value: isDate(input_data_ida) + "\n",
                 order: 12
             });
             $("#asterisk_input_data_ida").html("");
 
             submit += "0";
 
         } else {
 
             // console.log("Ops, a data de ida é inválida! -> " + isDate(input_data_ida));
             $("#asterisk_input_data_ida").html(`
           <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Campo obrigatório</b></font>`);
             submit += "1";
 
         }
 
         //Verificar Data Volta
         if (isDate(input_data_volta)) {
 
             // console.log("Ok, a data de volta é válida");
 
             messages.push({
                 id: "data_volta",
                 label: "Data Volta: ",
                 value: isDate(input_data_volta) + "\n",
                 order: 13
             });
             $("#asterisk_input_data_volta").html("");
 
             submit += "0";
 
         } else {
 
             // console.log("Ops, a data de volta é inválida! -> " + isDate(input_data_volta));
             $("#asterisk_input_data_volta").html(`
           <font color='yellow' style="margin-top:-15px; margin-bottom:2px;"><b>*Campo obrigatório</b></font>`);
             submit += "1";
 
         }
 
     }
 
 
     /* -----------------------------------------------------
      *
      *  Create Message (submit)
      *
      * -----------------------------------------------------
      */
     /**
      * submit 0 = sem erro (envia o formulário)
      */
     if ((parseInt(submit) + 0) === 0) {
 
 
 
         // ----------| Redeeming the filled fields |----------|
 
         //Do the ordering
         messages.sort(byOrder);
 
         //Variable that stores all fields
         var messageHtml = "";
 
         //While there are messages, concatenate the values
         for (i = 0; i < messages.length; i++) {
             messageHtml += messages[i].label + messages[i].value;
 
             var id = messages[i].id;
 
             if (id == "tipo_viagem") {
                 var tipo_viagem = messages[i].value;
             }
             if (id == "nome") {
                 var nome = messages[i].value;
             }
             if (id == "tipo_passagem") {
                 var tipo_passagem = messages[i].value;
             }
 
             if (id == "bagagem") {
                 if (messages[i].value == "Quero bagagem de 23Kg") {
                     var bagagem = "S";
                     console.log(messages[i].value);
                 } else {
                     var bagagem = "N";
                     console.log(messages[i].value);
                 }
             }
 
             if (id == "email") {
                 var email = messages[i].value;
             }
             if (id == "telefone") {
                 var telefone = messages[i].value;
             }
             if (id == "adultos") {
                 var adultos = messages[i].value;
             }
             if (id == "criancas_1") {
                 var criancas_1 = messages[i].value;
             }
             if (id == "criancas_2") {
                 var criancas_2 = messages[i].value;
             }
             if (id == "origem") {
                 var origem = messages[i].value;
             }
             if (id == "destino") {
                 var destino = messages[i].value;
             }
             if (id == "indicacao") {
                 var indicacao = messages[i].value;
             }
             if (id == "flexibilidade_datas") {
                 var flexibilidade_datas = messages[i].value;
             }
 
             //Gerados pelo custom
             var data_ida = $("#data_ida").val();
             var data_volta = $("#data_volta").val();
 
         };
 
 
         $.ajax({
             url: "send.php",
             type: "POST",
             data: {
                 tipo_viagem: tipo_viagem,
                 nome: nome,
                 tipo_passagem: tipo_passagem,
                 data_ida: data_ida,
                 data_volta: data_volta,
                 bagagem: bagagem,
                 email: email,
                 telefone: telefone,
                 adultos: adultos,
                 criancas_1: criancas_1,
                 criancas_2: criancas_2,
                 telefone: telefone,
                 link: link,
                 origem: origem,
                 destino: destino,
                 indicacao: indicacao,
                 flexibilidade_datas: flexibilidade_datas
             },
             cache: false,
             success: function (dataResult) {
                 console.log(dataResult);
             }
         });
 
 
         // ----------| Preparing the data for the API |----------|
 
 
         //oculta
         $(".form-contato").remove();
         $(".logo").remove();
         $("body").css("background", "#F4F4F4");
         //mostra
         $(".form-sucesso").css("display", "block",);
 
 
 
         // $("p").append("<div>" + redirectMessage + "</div>");
 
         setTimeout(function () {
 
             var message = title_form + "\n\n"; //Header
 
             message += messageHtml; //Body
 
             message = window.encodeURIComponent(message); //Converter mensagem para UTF8
 
             if (openInNewWindow === "true") {
                 blank = "_blank"; //abre em uma nova página
             } else {
                 blank = "_self"; //abre na mesma página
             }
 
             //Dispara o evento de cadastro Pixel (Lead)
             fbq('track', 'Lead');
 
             //Depois de um tempo redireciona o usuário
             setTimeout(() => {
                 window.open("https://wa.me/" + mobile + "?text=" + message, blank);
             });
             
          
 
             //------------| <Submit with UltraMsg>  |------------ (Em desenvolvimento)
             //Example url: https://api.ultramsg.com/instance24168/messages/chat?token=xbicp6kkhctqd7eg&to=+5543996262702&body=A+API+WhatsApp+em+UltraMsg.com+funciona+bem&priority=10
             /*function sendUltraMsg() {
             var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
              console.log(this.responseText);
             }
              };
             xhttp.open("GET", "https://api.ultramsg.com/instance24168/messages/chat?token=xbicp6kkhctqd7eg&to=+"+ mobile +"&body="+ message + "&priority=10", true);
              xhttp.send();
             }
             sendUltraMsg();
             ------------| <./Submit with UltraMsg> |------------| */
 
         }, 5000); //4000ms = 4s
 
 
     } else {
         messages = []; // Reset Messages (Fixed bug that duplicated messages)
         alert("Por favor preencha todos os campos!");
 
     }
 }