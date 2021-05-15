(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/column.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/components/column.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {};
  },
  props: {
    item: {}
  },
  methods: {
    openEdit: function openEdit() {}
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/regular.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/components/regular.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      i18n: template_i18n
    };
  },
  props: {
    item: {},
    block: {},
    index: 0
  },
  methods: {
    openEdit: function openEdit() {
      editBlockScreen.openEdit(this.item, this.block);
    },
    deleteBlock: function deleteBlock() {
      var c = confirm(this.i18n.delete_confirm);
      if (!c) return;
      this.$emit('delete', this.index);
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/row.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/components/row.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {};
  },
  props: {
    item: {}
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-editor.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-editor.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-form-generator */ "./node_modules/vue-form-generator/dist/vfg.js");
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_form_generator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _tinymce_tinymce_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @tinymce/tinymce-vue */ "./node_modules/@tinymce/tinymce-vue/lib/es2015/main/ts/index.js");
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  mixins: [vue_form_generator__WEBPACK_IMPORTED_MODULE_0__["abstractField"]],
  data: function data() {
    return {
      id: '',
      init: {
        plugins: 'searchreplace autolink fullscreen image link media codesample table charmap hr toc advlist lists wordcount imagetools textpattern help code',
        toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | pagebreak codesample code | removeformat',
        image_advtab: true,
        image_caption: true,
        height: 400,
        file_picker_callback: function file_picker_callback(callback, value, meta) {
          /* Provide file and text for the link dialog */
          if (meta.filetype === 'file') {
            uploaderModal.show({
              multiple: false,
              file_type: 'video',
              onSelect: function onSelect(files) {
                if (files.length) callback(bookingCore.url + '/media/preview/' + files[0].id);
              }
            });
          }
          /* Provide image and alt text for the image dialog */


          if (meta.filetype === 'image') {
            uploaderModal.show({
              multiple: false,
              file_type: 'image',
              onSelect: function onSelect(files) {
                if (files.length) callback(files[0].thumb_size);
              }
            });
          }
          /* Provide alternative source and posted for the media dialog */


          if (meta.filetype === 'media') {
            uploaderModal.show({
              multiple: false,
              file_type: 'video',
              onSelect: function onSelect(files) {
                if (files.length) callback(bookingCore.url + '/media/preview/' + files[0].id);
              }
            });
          }
        }
      }
    };
  },
  components: {
    'tinymce-editor': _tinymce_tinymce_vue__WEBPACK_IMPORTED_MODULE_1__["default"]
  },
  methods: {
    makeid: function makeid(length) {
      var result = '';
      var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var charactersLength = characters.length;

      for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
      }

      return result;
    }
  },
  created: function created() {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-listItem.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-listItem.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-form-generator */ "./node_modules/vue-form-generator/dist/vfg.js");
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_form_generator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vuedraggable__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuedraggable */ "./node_modules/vuedraggable/dist/vuedraggable.common.js");
/* harmony import */ var vuedraggable__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vuedraggable__WEBPACK_IMPORTED_MODULE_1__);
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  mixins: [vue_form_generator__WEBPACK_IMPORTED_MODULE_0__["abstractField"]],
  data: function data() {
    return {
      options: [],
      fakeModel: {
        _active: false
      },
      template_i18n: template_i18n,
    };
  },
  computed: {
    title_field: function title_field() {
      if (typeof this.schema.title_field == 'undefined') return false;
      return this.schema.title_field;
    }
  },
  created: function created() {
    if (_typeof(this.value) !== 'object' || this.value.constructor !== Array) {
      this.value = [];
    }

    for (var i = 0; i < this.schema.settings.length; i++) {
      this.schema.settings[i].model = this.schema.settings[i].id;
      this.fakeModel[this.schema.settings[i].id] = null; // this.fakeModel['_index'] = i++;
    } //            this.value.push(Object.assign({},this.fakeModel));

  },
  watch: {
    options: function options(_options) {}
  },
  destroyed: function destroyed() {},
  methods: {
    addNew: function addNew() {
      // this.fakeModel['_index'] =
      if (_typeof(this.value) !== 'object' || this.value.constructor !== Array) {
        this.value = [];
      }
      this.value.push(Object.assign({}, this.fakeModel));
    },
    deleteItem: function deleteItem(k) {
      var c = confirm(this.template_i18n.delete_confirm);

      if (c) {
        this.value.splice(k, 1);
      }
    }
  },
  components: {
    "vue-form-generator": vue_form_generator__WEBPACK_IMPORTED_MODULE_0___default.a.component,
    draggable: vuedraggable__WEBPACK_IMPORTED_MODULE_1___default.a
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-select2.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-select2.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-form-generator */ "./node_modules/vue-form-generator/dist/vfg.js");
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_form_generator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var os__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! os */ "./node_modules/os-browserify/browser.js");
/* harmony import */ var os__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(os__WEBPACK_IMPORTED_MODULE_1__);
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  mixins: [vue_form_generator__WEBPACK_IMPORTED_MODULE_0__["abstractField"]],
  data: function data() {
    return {
      options: [],
      selectedText: ''
    };
  },
  mounted: function mounted() {
    var vm = this;
    $(vm.$el).select2(vm.schema.select2);

    if (this.schema.pre_selected && this.value) {
      $.ajax({
        method: 'get',
        url: this.schema.pre_selected,
        data: {
          selected: this.value
        },
        dataType: 'json',
        success: function success(json) {
          if (vm.schema.select2.multiple) {
            if (typeof json.items != 'undefined' && _typeof(json.items) == 'object' && json.items.length) {
              for (var i = 0; i < json.items.length; i++) {
                var newOption = new Option(json.items[i].text, json.items[i].id, true, true);
                $(vm.$el).append(newOption);
              }

              $(vm.$el).select2('val', this.value);
              $(vm.$el).trigger('change');
            }

            return;
          } else {
            var newOption = new Option(json.text, vm.value, false, false);
            $(vm.$el).append(newOption).trigger('change');
          } //vm.selectedText = json.text;

        }
      });
    } else {}

    $(vm.$el).on('change', function () {
      // vm.$emit('input', $(this).val());
      vm.value = $(this).val();
    });
  },
  watch: {
    // value: function (value) {
    //     // update value
    //     $(this.$el)
    //         .val(value)
    //         .trigger('change')
    // },
    options: function options(_options) {// update options
      //$(this.$el).empty().select2({ data: options })
    }
  },
  destroyed: function destroyed() {
    $(this.$el).off().select2('destroy');
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-upload.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-upload.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-form-generator */ "./node_modules/vue-form-generator/dist/vfg.js");
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_form_generator__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  mixins: [vue_form_generator__WEBPACK_IMPORTED_MODULE_0__["abstractField"]],
  data: function data() {
    return {
      options: [],
      bookingCore: bookingCore
    };
  },
  methods: {
    openUploader: function openUploader() {
      var me = this;
      uploaderModal.show({
        multiple: false,
        file_type: 'image',
        onSelect: function onSelect(files) {
          console.log(files);
          me.value = files[0].id;
        }
      });
    }
  },
  created: function created() {},
  watch: {},
  destroyed: function destroyed() {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/column.vue?vue&type=template&id=1465b956&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/components/column.vue?vue&type=template&id=1465b956& ***!
  \****************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "col",
      class: "col-sm-" + (_vm.item.settings.size ? _vm.item.settings.size : 12)
    },
    [
      _c("div", { staticClass: "block-panel" }, [
        _c("div", { staticClass: "block-title" }, [
          _c("span", [
            _vm._v(
              "\n                " +
                _vm._s(_vm.item.name) +
                " -\n                "
            ),
            _c(
              "select",
              {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.item.settings.size,
                    expression: "item.settings.size"
                  }
                ],
                on: {
                  change: function($event) {
                    var $$selectedVal = Array.prototype.filter
                      .call($event.target.options, function(o) {
                        return o.selected
                      })
                      .map(function(o) {
                        var val = "_value" in o ? o._value : o.value
                        return val
                      })
                    _vm.$set(
                      _vm.item.settings,
                      "size",
                      $event.target.multiple ? $$selectedVal : $$selectedVal[0]
                    )
                  }
                }
              },
              _vm._l(12, function(i) {
                return _c("option", { domProps: { value: i } }, [
                  _vm._v(_vm._s(i) + "/12")
                ])
              }),
              0
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "title-right" }, [
            _c("span", { staticClass: "btn btn-light block-edit dropdown" }, [
              _vm._m(0),
              _vm._v(" "),
              _c("span", { staticClass: "dropdown-menu" }, [
                _c(
                  "span",
                  {
                    staticClass: "dropdown-item ",
                    on: { click: _vm.openEdit }
                  },
                  [_vm._v("Edit")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "dropdown-item " }, [
                  _vm._v("Delete")
                ])
              ])
            ]),
            _vm._v(" "),
            _c("span", { staticClass: "block-toggle btn btn-light" }, [
              _c("i", {
                staticClass: "icon ion-md-arrow-dropdown",
                on: {
                  click: function($event) {
                    _vm.item.open = _vm.item.open ? false : true
                  }
                }
              })
            ])
          ])
        ]),
        _vm._v(" "),
        _c(
          "div",
          {
            directives: [
              {
                name: "show",
                rawName: "v-show",
                value: _vm.item.open,
                expression: "item.open"
              }
            ],
            staticClass: "block-content"
          },
          _vm._l(_vm.item.children, function(child, index) {
            return _c(child.component, {
              key: index,
              tag: "component",
              attrs: { item: child }
            })
          }),
          1
        )
      ])
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { attrs: { href: "#", "data-toggle": "dropdown" } }, [
      _c("i", { staticClass: "icon ion-ios-hammer" })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/regular.vue?vue&type=template&id=74dd0ea6&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/components/regular.vue?vue&type=template&id=74dd0ea6& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "block-panel" }, [
    _c("div", { staticClass: "block-title" }, [
      _vm._v("\n        " + _vm._s(_vm.item.name) + "\n        "),
      _c("div", { staticClass: "title-right" }, [
        _c(
          "span",
          {
            staticClass: "btn btn-light block-delete show-hover",
            on: { click: _vm.deleteBlock }
          },
          [_c("i", { staticClass: "icon ion-ios-trash" })]
        ),
        _vm._v(" "),
        _c(
          "span",
          {
            staticClass: "btn btn-light block-edit",
            on: { click: _vm.openEdit }
          },
          [_c("i", { staticClass: "icon ion-ios-build" })]
        )
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/row.vue?vue&type=template&id=03362f2a&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/components/row.vue?vue&type=template&id=03362f2a& ***!
  \*************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "block-panel" }, [
    _c("div", { staticClass: "block-title" }, [
      _vm._v("\n        " + _vm._s(_vm.item.name) + "\n        "),
      _c("div", { staticClass: "title-right" }, [
        _vm._m(0),
        _vm._v(" "),
        _vm._m(1),
        _vm._v(" "),
        _c("span", { staticClass: "block-toggle btn btn-light" }, [
          _c("i", {
            staticClass: "icon ion-md-arrow-dropdown",
            on: {
              click: function($event) {
                _vm.item.open = _vm.item.open ? false : true
              }
            }
          })
        ])
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        directives: [
          {
            name: "show",
            rawName: "v-show",
            value: _vm.item.open,
            expression: "item.open"
          }
        ],
        staticClass: "block-content"
      },
      [
        _c(
          "div",
          { staticClass: "row" },
          _vm._l(_vm.item.children, function(child, index) {
            return _c(child.component, {
              key: index,
              tag: "component",
              attrs: { item: child }
            })
          }),
          1
        )
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "span",
      { staticClass: "btn btn-light block-delete show-hover" },
      [_c("i", { staticClass: "icon ion-ios-trash" })]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "block-edit btn btn-light show-hover" }, [
      _c("i", { staticClass: "icon ion-ios-build" })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-editor.vue?vue&type=template&id=24a3e51c&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-editor.vue?vue&type=template&id=24a3e51c& ***!
  \******************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {},
    [
      _c("tinymce-editor", {
        attrs: {
          init: _vm.init,
          toolbar:
            "formatselect | bold italic strikethrough forecolor backcolor | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent code "
        },
        model: {
          value: _vm.value,
          callback: function($$v) {
            _vm.value = $$v
          },
          expression: "value"
        }
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-listItem.vue?vue&type=template&id=dfe7ee80&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-listItem.vue?vue&type=template&id=dfe7ee80& ***!
  \********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "bravo-template-list-item" }, [
    _c(
      "div",
      { staticClass: "list-item-wraps" },
      [
        _c(
          "draggable",
          {
            attrs: { options: { handle: ".handle" } },
            model: {
              value: _vm.value,
              callback: function($$v) {
                _vm.value = $$v
              },
              expression: "value"
            }
          },
          _vm._l(_vm.value, function(item, k) {
            return _c("div", { staticClass: "list-item" }, [
              _c("div", { staticClass: "list-item-header handle" }, [
                _vm.title_field &&
                typeof item[_vm.title_field] != "undefined" &&
                item[_vm.title_field]
                  ? _c("span", [_vm._v(_vm._s(item[_vm.title_field]))])
                  : _c("span", [_vm._v("#" + _vm._s(k + 1))]),
                _vm._v(" "),
                _c("span", [
                  _c(
                    "span",
                    {
                      on: {
                        click: function($event) {
                          item._active = item._active == false ? true : false
                        }
                      }
                    },
                    [
                      _c("i", {
                        directives: [
                          {
                            name: "show",
                            rawName: "v-show",
                            value: item._active,
                            expression: "item._active"
                          }
                        ],
                        staticClass: "icon ion-ios-arrow-dropdown"
                      }),
                      _vm._v(" "),
                      _c("i", {
                        directives: [
                          {
                            name: "show",
                            rawName: "v-show",
                            value: !item._active,
                            expression: "!item._active"
                          }
                        ],
                        staticClass: "icon ion-ios-arrow-dropright"
                      })
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      on: {
                        click: function($event) {
                          return _vm.deleteItem(k)
                        }
                      }
                    },
                    [_c("i", { staticClass: "icon ion-ios-trash" })]
                  )
                ])
              ]),
              _vm._v(" "),
              _c(
                "div",
                {
                  directives: [
                    {
                      name: "show",
                      rawName: "v-show",
                      value: item._active,
                      expression: "item._active"
                    }
                  ],
                  staticClass: "list-item-settings"
                },
                [
                  _c("vue-form-generator", {
                    attrs: {
                      schema: { fields: _vm.schema.settings },
                      model: item
                    }
                  })
                ],
                1
              )
            ])
          }),
          0
        )
      ],
      1
    ),
    _vm._v(" "),
    _c(
      "span",
      { staticClass: "btn btn-primary btn-sm", on: { click: _vm.addNew } },
      [_vm._v(_vm._s(_vm.template_i18n.add_new))]
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-select2.vue?vue&type=template&id=901394d2&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-select2.vue?vue&type=template&id=901394d2& ***!
  \*******************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("select")
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-upload.vue?vue&type=template&id=72eb67b0&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/module/template/admin/fields/field-upload.vue?vue&type=template&id=72eb67b0& ***!
  \******************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "dungdt-upload-box dungdt-upload-box-vue ",
      class: { active: _vm.value },
      staticStyle: { width: "200px" }
    },
    [
      _c(
        "div",
        {
          directives: [
            {
              name: "show",
              rawName: "v-show",
              value: !_vm.value,
              expression: "!value"
            }
          ],
          staticClass: "upload-box"
        },
        [
          _c("div", { staticClass: "text-center" }, [
            _c(
              "svg",
              { attrs: { id: "next-dropzone", width: "100%", height: "100%" } },
              [
                _c(
                  "svg",
                  {
                    attrs: {
                      xmlns: "http://www.w3.org/2000/svg",
                      viewBox: "0 0 24 20"
                    }
                  },
                  [
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M18.487 17.827c-.063.077-.148.133-.244.16-.267.053-.54.074-.81.065l-15.35 1.323c-.563.052-.596-.198-.637-.702l-.117-1.448-.418-5.07-.458-5.682C.346 5.13.246 3.79.127 2.448c-.027-.32-.07-.585.275-.702.335-.082.678-.125 1.023-.127l1.567-.132L13.05.626c.692-.06 1.383-.115 2.083-.17.58-.045 1.198-.222 1.78-.174.432.035.272.456.3.767l.057.674.17 1.996.46 5.352.418 4.85c.094 1.083.175 2.167.26 3.248.017.252.037.494-.092.658z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M18.683 17.98c-.087.107-.202.186-.33.23-.107.036-.217.06-.328.067-.208.017-.39 0-.546.01-.35.027-.718.05-1.074.07s-.72.043-1.077.09c-.357.06-.716.097-1.076.114-.36.02-.72.013-1.08.05l-1.076.11-2.146.26c-.358.034-.717.082-1.075.107s-.72.04-1.08.056c-.36.017-.718.042-1.076.083s-.714.102-1.072.135c-.358.034-.72.053-1.077.078l-1.078.063c-.36.022-.72.036-1.08.064l-.268.02c-.104.01-.21.01-.313 0-.137-.01-.268-.065-.372-.155-.092-.096-.155-.216-.18-.347-.032-.187-.055-.377-.066-.567-.017-.18-.037-.358-.06-.538-.05-.356-.098-.715-.12-1.073s0-.723-.024-1.083c-.01-.18-.033-.36-.07-.537-.03-.178-.05-.357-.06-.538l-.15-2.154c-.05-.72-.103-1.438-.16-2.154S.433 9.003.435 8.28c0-.36-.01-.72-.05-1.078S.276 6.487.25 6.13C.19 5.415.19 4.686.15 3.957.137 3.608.096 3.25.067 2.89l-.052-.537C0 2.256-.006 2.157 0 2.06c.013-.12.068-.23.157-.31.083-.07.18-.12.285-.145.092-.027.186-.048.28-.06.19-.025.372-.03.55-.04l1.074-.083c.72-.056 1.435-.12 2.154-.163.358-.028.72-.055 1.077-.09l1.073-.13C7.365.946 8.08.863 8.798.786s1.433-.15 2.15-.223c.358-.04.717-.067 1.077-.09l1.08-.048.54-.037.538-.052c.356-.033.725-.077 1.067-.123S15.942.08 16.317.03c.194-.027.39-.038.585-.03.16 0 .312.062.427.172.104.12.16.274.155.433 0 .115-.012.208-.02.29v.24c.01.18.022.36.045.537l.12 1.075c.04.358.074.717.09 1.077s0 .723.028 1.08c.025.72.17 1.434.17 2.157.003.362.035.722.093 1.078.065.355.106.713.124 1.073.033.722.054 1.443.123 2.16s.183 1.428.208 2.15c.017.36.03.722.07 1.08s.09.715.132 1.073c.042.358.075.717.11 1.075l.052.542c.01.105.01.21 0 .317-.015.135-.066.264-.147.373zm-.393-.307c.052-.11.067-.232.044-.35l-.04-.533c-.027-.358-.06-.717-.073-1.077-.012-.72-.073-1.44-.18-2.152-.058-.355-.094-.714-.12-1.074l-.057-1.08c-.06-.718-.17-1.43-.27-2.145-.044-.357-.06-.72-.045-1.08.008-.36-.02-.722-.085-1.077-.14-.71-.065-1.44-.154-2.156-.034-.358-.107-.715-.147-1.07s-.067-.718-.085-1.078c-.02-.36-.027-.722-.054-1.08 0-.18-.025-.358-.044-.537l-.008-.14V.635c-.003-.027-.008-.053-.017-.08l-.08-.01c-.164-.015-.33-.015-.495 0-.342.024-.696.09-1.07.122s-.724.035-1.086.067l-.537.04-.548.063-1.072.16-1.075.096c-.72.06-1.435.13-2.154.17s-1.44.1-2.16.11c-.722.002-1.443.055-2.157.155-.715.098-1.43.175-2.148.252-.36.037-.71.07-1.08.102-.184.012-.36.02-.52.044-.078.01-.155.022-.23.04-.053.01-.102.028-.147.056-.02.017-.03.025-.046.08-.012.07-.015.145-.01.218l.017.54c.018.36.04.72.09 1.077.086.717.24 1.425.293 2.144.025.36-.03.726-.02 1.086.02.36.07.72.143 1.073.072.353.123.71.152 1.07l.063 1.08c.036.718.093 1.437.15 2.155l.157 2.167c.017.18.022.36.017.542-.013.18-.013.36 0 .542.025.358.108.715.135 1.073s.037.72.047 1.08c0 .18 0 .36.02.54.01.172.033.343.064.513.04.156.066.19.21.208.17.006.34 0 .507-.02.36-.025.72-.063 1.077-.094.717-.063 1.433-.135 2.152-.192s1.438-.1 2.152-.208c.358-.048.715-.104 1.073-.135s.72-.057 1.078-.086l2.152-.135c.358-.028.72-.045 1.077-.08s.715-.098 1.073-.142c.357-.047.717-.074 1.077-.08.36-.018.717-.068 1.075-.103s.71-.083 1.08-.12c.207-.014.38 0 .532-.022.114.002.224-.04.308-.115z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        stroke: "#d6dbeb",
                        "stroke-width": ".417",
                        "stroke-linecap": "round",
                        d:
                          "M15.446 15.32l-9.867.847c.37-.208.73-.43 1.093-.644.305-.185.62-.352.944-.502.166-.074.335-.14.508-.195.142-.048.286-.088.43-.12l.1-.022c.443-.1.903-.1 1.347 0 .083.02.166.045.246.075.052.02.104.04.156.065.27.125.517.304.78.438.142.077.296.13.455.16.38.07.772-.04 1.155-.114.875-.176 1.777-.17 2.65.013z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M5.16 16.042c-.75-.616-1.344-1.4-1.73-2.292-.257-.543-.39-1.135-.395-1.735.027-1.167.72-2.13 1.142-3.183.323-.804-.035-2.404.492-2.587s.486 1.498.96 2.07c.3.363.676.626.976.997.625.752.86 1.842.817 2.867s-.338 2.003-.646 2.957z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M8.654 14.706c-.098-1.094 1.16-2.048 1.813-3.08.833-1.31.662-2.79.135-4.118S9.098 3.49 8.66 3.62c-.438.13-.12 1.783-1.273 3.67-.546.89-.398 1.995-.125 2.957 0 0 .485 3.356-.417 4.86zM1.875 12.37l1.198 1.04.012.124.285 2.708v.125c-.024-.028-.05-.055-.077-.08-.027-.026-.056-.05-.087-.076-.323-.24-.675-.435-1.048-.584z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M1.988 12.242l.625.494c.102.085.208.17.3.26l.285.275.025.026c.025.024.038.06.035.094-.007.248.005.496.035.742.02.246 0 .498.025.744s.067.492.11.735l.112.734c.01.062-.02.124-.073.157s-.122.03-.173-.006l-.02-.015-.016-.022c-.07-.065-.163-.13-.244-.208-.086-.077-.18-.147-.277-.208-.103-.056-.208-.106-.317-.15-.108-.048-.208-.09-.33-.127-.058-.02-.1-.067-.112-.125s.008-.12.053-.158c.046-.04.108-.052.165-.033h.02c.23.086.456.185.676.295.114.055.22.126.314.208.094.092.194.165.294.273l-.02-.02-.266.138-.167-1.473c-.03-.245-.106-.484-.115-.732-.003-.125 0-.25.012-.375.006-.062.006-.124 0-.185-.02-.06-.027-.123-.023-.185l.05.098c-.095-.093-.178-.207-.276-.286s-.225-.144-.325-.23c-.21-.17-.418-.33-.61-.507-.054-.06-.056-.152-.004-.215s.14-.08.212-.04l.017.032z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M10.056 14.67c.556-1.197 2.625-.98 3.8-1.905 1.054-.833 1.206-2.47 1.11-3.585-.892 1.387-3.517 1.62-4.738 2.87 0 0-1.875 2.064-1.71 3.157z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M13.75 15.16c1.484-.318 2.64-1.482 2.946-2.97-.906.37-1.855.62-2.825.75-.8-.062-1.598.17-2.243.65-1.12.81-1.702 1.414-1.667 1.728zM2.177 15.833c.334.157.683.28 1.042.365.053.012.103.02.153.03.106.017.213.026.32.024l-.316.02h-.07z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M2.246 15.683c.065.017.125.035.188.054.063.015.124.037.18.067.03.017.06.03.086.048.03.015.058.038.077.067.056.032.12.04.177.074s.108.088.173.1c.064.012.13.02.194.02.065 0 .128-.006.19-.018.06-.008.122-.01.182-.01h.03c.088.013.15.09.146.178s-.076.158-.164.16c-.064-.016-.13-.023-.196-.02-.065.01-.13.022-.192.04-.057.02-.12.006-.164-.033s-.065-.1-.053-.157c.01-.058.053-.106.11-.125h.023l.063-.01.194-.033c.032-.004.064-.004.096 0 .033.006.066.013.098.023l.012.33c-.142-.02-.29-.022-.427-.043-.072 0-.138-.02-.21-.03-.07 0-.14-.007-.207-.02-.067-.017-.115-.098-.173-.133-.077.015-.117-.073-.18-.098-.136-.01-.27-.045-.39-.108-.073-.04-.107-.125-.08-.203s.11-.123.19-.108l.026-.01z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#e8eef5",
                        d:
                          "M1.483 7.773c.767.856 2.727 1.704 1.992 2.237-.088.07-.16.16-.208.26-.256.456-.325 1.265-.333 1.92 0 .576.033 1.04.033 1.04l-1.11-1.122z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M7.448 7.43c.15.033.294.085.43.155.05.025.107.037.164.035.063-.003.125-.016.183-.04.267-.1.506-.263.694-.477.01-.01.017-.023.024-.035V7.065c0-.033.02-.062.05-.073h.03c.04-.004.084-.004.126 0 .076.01.15.026.225.047.077.02.152.048.223.085.047.024.087.062.112.108v.008c-.01-.014-.028-.02-.046-.02h.015c.117-.075.225-.165.32-.268.052-.052.104-.104.16-.156.06-.06.13-.11.208-.144.04-.01.084.01.1.05s-.002.084-.04.104h-.017c-.052.03-.1.066-.143.108-.052.048-.102.098-.154.15s-.102.104-.158.154c-.056.057-.12.106-.19.146-.027.016-.058.026-.09.03-.037 0-.072-.014-.096-.043-.01-.014-.017-.028-.022-.043-.01-.018-.027-.033-.046-.042-.06-.032-.12-.057-.185-.075-.068-.02-.138-.036-.208-.046-.03-.003-.06-.003-.09 0 .03-.012.046-.04.045-.07v-.018.062c-.004.01-.01.018-.015.026-.013.02-.028.037-.044.054-.108.117-.227.208-.335.306-.053.053-.115.096-.184.127l-.108.044c-.02.007-.037.017-.052.03-.018.01-.037.017-.056.022-.156.054-.325.06-.483.012-.124-.066-.256-.117-.392-.152-.045-.008-.076-.05-.068-.097s.05-.076.097-.068l.013.002zM3.473 10.133c.142.015.28.045.417.09.112.03.23.03.342 0 .122-.03.24-.072.352-.127.123-.05.237-.12.335-.208l.032-.03v.024s0 .027 0 0 .023-.052.037-.065h.02c.04-.005.082-.005.123 0 .07.003.14.01.208.02.07.008.14.023.21.043.04.01.08.03.116.058.014.012.026.026.035.042v.015c.002-.005.002-.01 0-.015-.007-.01-.017-.015-.028-.02-.03 0-.015 0 0 0 .118-.048.228-.114.327-.195.053-.04.107-.08.166-.12.063-.045.134-.08.208-.105.04-.007.08.017.093.056s-.004.082-.04.1h-.018c-.112.053-.216.12-.31.196-.055.04-.11.08-.168.117-.06.042-.127.077-.198.1-.034.012-.072.012-.106 0-.02-.006-.036-.018-.048-.034-.006-.008-.01-.018-.015-.027-.018-.016-.04-.026-.063-.032-.06-.02-.12-.034-.183-.044s-.127-.018-.19-.023h-.06c.01-.01.03 0 .04-.068v.035l-.014.025c-.01.01-.018.022-.03.03L5 10c-.117.083-.233.148-.344.23s-.265.086-.394.143c-.07.014-.138.022-.208.023-.074.008-.15.005-.223-.01-.124-.042-.25-.072-.378-.092-.046-.005-.08-.046-.075-.092s.046-.08.092-.075v.006zM14.033 11.992c-.04-.083-.074-.17-.098-.26-.02-.067-.057-.127-.106-.177-.038-.075-.124-.102-.186-.17-.066-.055-.145-.094-.23-.114h-.026c.01.004.02.004.03 0h.01s.016-.01 0 0c-.02.015-.05.015-.072 0l-.023-.02c-.02-.02-.038-.045-.052-.07-.023-.042-.044-.083-.064-.126-.02-.044-.037-.09-.05-.135-.007-.032-.007-.064 0-.095.002-.016.007-.032.015-.046v-.013.017c-.003.013-.003.027 0 .04.013.033.016.02 0 .02-.06-.05-.132-.09-.207-.116l-.125-.052c-.05-.02-.096-.046-.137-.08-.03-.03-.033-.078-.006-.11s.075-.042.11-.018l.018.012c.066.04.136.072.208.098.09.03.176.075.252.133.024.02.042.046.05.076 0 .016-.002.033-.008.048-.004.01-.01.017-.015.025v-.016c-.005.012-.005.025 0 .037.01.04.02.077.036.113.015.038.033.076.052.112 0 .015.027.042.02.033h-.013c-.017 0-.027-.02-.083 0l.02-.013c.016-.004.032-.004.047 0h.032l.04.015c.092.035.163.085.254.11s.13.135.208.183c.03.038.06.077.085.12.033.038.06.082.08.13.02.08.047.16.08.237.02.04.002.09-.04.11s-.09.004-.11-.038l.003-.004zM15.313 14.327c-.064-.068-.12-.143-.17-.223-.035-.06-.084-.11-.143-.146-.056-.06-.148-.063-.225-.108-.08-.034-.166-.05-.252-.044h-.017s.033-.025.027-.027c-.016.025-.045.04-.075.034h-.017c-.026-.015-.05-.034-.072-.056-.034-.032-.067-.065-.098-.1-.038-.036-.073-.075-.104-.117-.018-.026-.03-.056-.035-.09-.002-.015-.002-.03 0-.047v-.008.02c-.002.01-.002.024 0 .036.022.03.022.018.016.018-.076-.03-.156-.047-.238-.05l-.135-.015c-.054-.005-.106-.017-.156-.037-.035-.02-.05-.065-.033-.103s.056-.06.096-.05h.02c.075.018.15.03.228.033.096.003.19.022.28.056.03.012.054.032.07.058.01.017.013.035.013.054.002.01.002.018 0 .027.002-.004.002-.01 0-.016 0 0 0 .02.013.033.02.034.044.067.07.098s.052.063.08.092c0 .013.04.033.023.025h-.015c-.034-.006-.07.012-.084.044 0 0 .04-.046.042-.04h.098c.09.016.183.027.275.033.095 0 .166.09.26.114.04.027.08.057.116.09.044.028.082.063.115.104.043.073.09.143.145.208.03.034.027.086-.006.116s-.086.03-.118-.004l.012-.015zM14.63 14.71c-.072-.08-.137-.164-.193-.256-.047-.07-.11-.127-.185-.167-.07-.067-.173-.073-.265-.123-.093-.04-.193-.06-.294-.056h-.04s.013 0 .04-.033c-.01.018-.026.032-.046.037H13.6c-.03-.016-.057-.037-.08-.06-.04-.037-.077-.075-.112-.117-.036-.04-.07-.085-.1-.13-.02-.03-.033-.063-.04-.097-.003-.016-.003-.032 0-.048v-.017.012c-.004.012-.004.025 0 .037.023.03.017.015.012.015-.09-.035-.183-.055-.28-.06l-.153-.02c-.06-.005-.12-.02-.175-.043-.036-.02-.05-.066-.034-.104s.06-.06.1-.048h.018c.088.024.178.04.27.046l.153.02c.057.006.113.022.166.047.03.012.056.034.073.063.005.02.005.04 0 .058v.023-.01c.002.016.008.03.018.045.024.04.052.078.08.115.032.037.064.075.097.108s.044.04.033.033h-.05c-.024.007-.044.024-.054.047.037-.058.06-.046.07-.052h.08c.11.01.208.042.315.044.053.003.104.023.147.055.022.017.047.03.073.042.033 0 .05.023.075.033.047.03.09.065.133.102.05.032.093.072.13.12.05.083.105.162.168.236.03.034.027.085-.005.115s-.082.03-.114 0l.017-.013zM13.696 15.208c-.073-.08-.138-.164-.194-.256-.047-.07-.11-.127-.185-.167-.07-.067-.173-.073-.265-.123-.093-.04-.193-.06-.294-.056h-.04s.013 0 .04-.033c-.01.018-.026.032-.046.037H12.66c-.03-.016-.056-.037-.08-.06-.04-.037-.076-.075-.11-.117-.037-.04-.07-.085-.1-.13-.02-.03-.034-.063-.04-.097-.004-.016-.004-.032 0-.048v-.017.013c-.005.012-.005.025 0 .037.022.03.016.015.01.015-.088-.035-.182-.055-.278-.06l-.154-.02c-.06-.005-.12-.02-.175-.043-.036-.02-.05-.066-.034-.104s.058-.06.098-.048h.02c.087.024.177.04.268.046l.154.02c.058.006.114.022.167.047.03.012.056.034.073.063.013.017.02.04.02.06.002.008.002.015 0 .023v-.024c.004.017.01.032.02.046.024.04.052.078.08.115.032.037.064.075.097.108s.044.04.033.033h-.05c-.024.006-.044.023-.054.046.037-.058.06-.046.07-.052h.08c.11.01.208.042.315.044.055.004.106.024.15.056.02.017.046.03.072.042.033 0 .05.023.075.033.047.03.09.065.133.102.05.03.093.07.13.118.05.084.105.163.168.237.03.034.027.085-.005.115s-.083.03-.115 0v-.003zM13.417 12.656c-.04-.083-.074-.17-.098-.26-.022-.067-.058-.127-.107-.177-.037-.076-.123-.103-.185-.17-.066-.056-.145-.095-.23-.115h-.026c.01.003.02.003.03 0h.01s.016-.012 0 0c-.02.014-.05.014-.072 0l-.03-.023c-.02-.02-.04-.045-.053-.07-.024-.042-.045-.083-.065-.126-.02-.044-.037-.09-.05-.135-.007-.03-.007-.062 0-.093.002-.016.007-.032.015-.046v-.01.016c-.004.013-.004.027 0 .04.012.033.015.02 0 .02-.062-.05-.133-.09-.208-.116l-.126-.052c-.05-.022-.098-.05-.14-.088-.03-.03-.034-.08-.007-.112s.075-.04.11-.017l.018.013c.066.04.136.072.208.098.09.03.176.076.252.134.024.02.042.045.05.075.005.017.005.037 0 .055-.004.01-.01.017-.015.025v-.015.037c.01.038.022.076.037.112.015.038.033.076.052.113 0 .015.026.042.018.033h-.013c-.017 0-.027-.02-.083 0l.02-.012c.016-.004.032-.004.047 0h.032l.04.015c.092.035.162.085.254.11s.13.135.208.183c.03.038.06.077.085.12.033.038.06.082.08.13.02.08.047.16.08.238.02.04.002.09-.04.11s-.09.004-.11-.038l.005-.002zM12.917 13.056c-.04-.083-.074-.17-.098-.26-.022-.067-.058-.127-.107-.177-.037-.076-.123-.103-.185-.17-.066-.056-.145-.095-.23-.115h-.026c.01.003.02.003.03 0h.01s.016-.013 0 0c-.02.014-.05.014-.072 0l-.017-.013c-.02-.02-.038-.045-.052-.07-.023-.042-.044-.083-.064-.126-.02-.044-.037-.09-.05-.135-.007-.03-.007-.062 0-.093.002-.016.007-.032.015-.046v-.01.016c-.003.013-.003.027 0 .04.013.033.016.02 0 .02-.06-.05-.132-.09-.207-.116l-.125-.052c-.05-.02-.096-.046-.137-.08-.03-.03-.033-.078-.006-.11s.075-.042.11-.018l.018.013c.066.04.136.072.208.098.09.03.176.076.252.134.024.02.042.045.05.075.005.017.005.037 0 .055-.004.01-.01.017-.015.025v-.015c-.004.012-.004.025 0 .037.01.038.022.076.037.113.015.038.033.076.052.112 0 .015.027.042.02.033h-.013c-.017 0-.027-.02-.083 0l.02-.012c.016-.004.032-.004.047 0h.033l.04.015c.092.035.163.085.254.11s.13.135.208.183c.03.038.06.077.085.12.034.038.06.082.08.13.02.08.048.16.08.237.02.04.003.09-.04.11s-.09.004-.11-.038l-.01-.02zM11.115 14.22c-.042-.083-.074-.17-.098-.262-.02-.067-.057-.127-.106-.177-.036-.074-.122-.1-.184-.168-.066-.056-.145-.095-.23-.115h-.026c.01.003.02.003.03 0h.01s.016-.012 0 0c-.02.014-.05.014-.072 0l-.02-.02c-.02-.022-.04-.046-.053-.072-.024-.04-.045-.082-.065-.125-.02-.044-.037-.09-.05-.135-.007-.03-.007-.063 0-.094.002-.015.007-.03.015-.045v-.012.017c-.004.013-.004.027 0 .04.012.033.015.02 0 .02-.062-.05-.133-.09-.208-.116l-.125-.052c-.05-.02-.096-.046-.138-.08-.03-.03-.034-.078-.007-.11s.075-.042.11-.018l.018.013c.066.04.136.072.208.098.09.03.176.075.252.133.024.02.042.045.05.075.005.018.005.038 0 .056l-.015.024v-.015c-.004.01-.004.024 0 .036.01.038.022.076.037.113.015.037.033.075.052.11 0 .016.026.043.018.034h-.012c-.017 0-.027-.02-.083 0l.02-.012c.016-.004.032-.004.047 0h.033l.04.015c.092.035.163.085.254.11s.13.135.208.183c.03.038.06.077.085.12.034.038.06.082.08.13.02.08.048.16.08.237.02.04.003.09-.04.11s-.09.004-.11-.038l-.006-.01zM2.13 12.97c0 .01 0 .036-.02.03h-.063c-.003.02-.003.042 0 .063 0 .017-.013.012-.025.015-.004.01-.004.02 0 .03.002.03-.014.06-.042.074s-.06.012-.085-.007c-.025-.02-.036-.05-.03-.08l.01-.087c-.002-.01-.002-.02 0-.03 0 0 .03 0 .028-.01s.02-.032.03-.05c.01-.016 0-.032 0-.03H2v-.025s.012-.023.026-.03c.024-.008.05-.004.07.012s.03.04.026.066l.008.064zM3.1 13.608c.02-.003.04-.013.054-.03-.015.018-.036.03-.058.032l.04-.015c-.056.056-.112.17-.196.244l-.03.03c-.015.005-.028.015-.036.027l-.056.067c-.045.045-.096.084-.15.117-.013.007-.027.01-.042.013-.013 0-.026-.005-.037-.012-.016 0 0 0 0 0h-.022c-.025.003-.05.007-.075.013-.053.013-.105.03-.156.05s-.104.032-.158.035c-.01.002-.02.006-.028.012 0-.015.023 0 .013-.07s0 0 0 .016v.025c-.003.018-.008.034-.017.05l-.05.084c-.025.036-.073.047-.11.025s-.052-.07-.033-.11l.012-.016c.014-.02.027-.04.038-.063v.043c0 .015.033.063 0 .015-.01-.023-.01-.05 0-.073.005-.01.01-.02.02-.03s.017-.017.028-.024c.017-.01.035-.02.054-.026.06-.027.123-.015.18-.037.057-.015.116-.027.176-.035.034-.003.068-.003.102 0 .028 0 .055.008.08.02l.016.013c-.004-.017-.016-.03-.032-.037-.008-.003-.017-.003-.025 0 .022-.04.05-.078.08-.11.022-.02.05-.03.074-.05.012-.008.02-.02.023-.035l.03-.03c.024-.017.046-.037.066-.06.017-.022.02-.057.037-.08.035-.055.08-.104.13-.144l.04-.016c-.02.003-.04.013-.053.03.015-.018.036-.03.058-.032.046-.004.087.03.09.076s-.03.087-.075.09v.01zM3.415 11.302c.175.01.348.036.52.077.152.03.31.03.464 0 .08-.013.16-.03.24-.053.08-.027.16-.06.24-.08.162-.048.316-.118.457-.21l.05-.032.02-.017v.015c-.004.01-.004.023 0 .033-.007-.025 0-.05.018-.07l.02-.014c.03-.01.06-.015.09-.015h.068c.088 0 .175 0 .263.013.088.007.176.02.262.035.048.008.095.023.14.044.016.007.03.017.044.028.01.01.02.02.027.03-.006-.005-.01-.01-.018-.014-.04-.015-.015 0 0 0 .157-.05.308-.12.448-.208.15-.096.314-.175.483-.233.03-.008.06 0 .08.02s.03.05.024.08c-.007.03-.03.052-.058.06H7.28c-.152.055-.298.124-.435.208-.15.097-.312.173-.48.228-.044.013-.09.008-.13-.012-.01-.007-.02-.015-.027-.025l-.01-.016c-.033-.016-.068-.027-.104-.033-.085-.02-.17-.04-.258-.05-.083 0-.167-.016-.248-.018h-.092l.02-.012s.04-.05.02-.08V11c.002.01.002.022 0 .033-.002.01-.007.02-.013.026-.008.012-.018.022-.03.03l-.032.024-.06.035c-.156.085-.31.154-.465.24-.077.042-.16.07-.248.083-.088.01-.17.056-.258.063-.088.016-.177.024-.267.026-.09.013-.182.013-.273 0-.162-.04-.327-.068-.494-.083-.046 0-.083-.037-.083-.083s.037-.083.083-.083l.02-.004zM3.28 13.63c.176.012.35.037.52.078.153.03.31.03.465 0 .082-.012.162-.03.242-.052.08-.027.158-.06.24-.08.16-.048.315-.118.456-.21l.05-.032.02-.017v.015c-.004.01-.004.023 0 .033-.007-.025 0-.05.018-.07l.022-.014c.03-.01.06-.014.09-.014h.067c.087 0 .174 0 .26.012.09.007.177.02.264.035.048.008.095.023.14.044.016.008.03.018.044.03.01.008.02.018.027.03-.005-.006-.01-.01-.017-.015-.04-.015-.015 0 0 0 .157-.05.308-.12.448-.208.15-.096.314-.175.483-.233.028-.007.06 0 .08.02s.03.052.023.08c-.007.03-.03.053-.058.06h-.017c-.152.056-.298.125-.435.21-.154.09-.318.16-.49.21-.043.012-.09.007-.13-.013-.01-.007-.02-.015-.026-.025l-.01-.017c-.033-.016-.068-.027-.104-.033-.08-.017-.162-.03-.244-.037-.084 0-.168-.015-.25-.017h-.093l.02-.013s.04-.05.02-.08c.005.01.01.017.012.026v.034c-.003.01-.008.018-.013.025-.008.01-.018.02-.03.03l-.032.023-.06.035c-.156.085-.31.154-.465.24-.077.042-.16.07-.248.083-.087.01-.17.057-.258.064-.088.015-.177.023-.267.025-.09.012-.182.012-.273 0-.162-.04-.327-.07-.494-.084-.046 0-.083-.037-.083-.083s.037-.083.083-.083l.004-.01zM3.125 12.456c.185.01.37.035.55.075.166.032.336.032.502 0 .087-.012.173-.03.258-.053.085-.027.17-.06.256-.083.174-.05.34-.125.493-.22l.054-.034.023-.017-.01.044s0 .027 0 0c-.006-.016-.006-.034 0-.05.017-.023.015-.017.025-.025.02-.01.04-.015.06-.017h.385c.092 0 .185.017.28.033.05.008.1.022.147.042.016.007.03.015.046.025 0 0 .067.07.02.023-.04-.017-.01 0 0-.01.17-.05.33-.12.482-.208.163-.097.336-.176.517-.235.043-.01.085.018.097.06s-.013.086-.054.1H7.24c-.162.055-.32.125-.47.21-.162.096-.336.173-.517.228-.045.014-.094.008-.135-.015l-.03-.03c-.012-.02 0 0 0 0h-.014c-.037-.017-.075-.028-.115-.034-.086-.017-.174-.027-.264-.035s-.177-.016-.265-.016h-.093s-.027 0 0 0c.006-.005.012-.012.017-.02.01-.017.015-.04.01-.06 0-.028 0 0 0 0 .002.02-.002.042-.013.06l-.01.014c-.007.01-.016.018-.026.025l-.035.023-.066.035-.498.243c-.083.042-.172.07-.265.083-.046.005-.093.017-.137.035-.045.013-.09.022-.138.028-.093.015-.187.024-.28.027-.096.013-.193.013-.288 0-.174-.038-.35-.065-.527-.08-.046 0-.083-.036-.083-.082s.037-.083.083-.083l.042-.002zM7.723 6.22c.13.035.257.09.373.16.04.024.084.036.13.034.052-.003.105-.017.153-.04.23-.1.43-.26.578-.467l.015-.03v-.011c.002-.018.01-.034.025-.046.018-.014.04-.022.063-.023.04-.004.078-.004.116 0 .07.012.14.03.208.054.07.024.136.057.196.1.04.03.07.07.085.12v-.01c-.005-.01-.013-.016-.023-.02-.018-.012-.04-.01-.058 0h.02c.097-.076.186-.165.26-.264.043-.05.084-.1.13-.15.05-.062.11-.112.18-.148.04-.012.083.007.1.045s.004.082-.03.105h-.02c-.042.03-.08.063-.112.102-.042.046-.083.094-.125.144-.082.108-.176.206-.28.292-.023.016-.046.028-.072.035-.05.02-.104 0-.13-.045-.007-.01-.012-.022-.016-.033 0 0 0-.02-.028-.035-.046-.033-.097-.06-.15-.08-.056-.02-.114-.038-.173-.05-.026-.003-.05-.003-.076 0l.027-.016c.015-.01.023-.027.026-.045.002-.01.002-.018 0-.027v.02c.003.014.003.03 0 .045-.01.022-.02.042-.035.06-.157.224-.368.406-.614.53-.14.058-.297.063-.44.012-.104-.066-.216-.118-.333-.156-.045-.01-.073-.056-.063-.1s.055-.074.1-.064l-.008.002zM7.63 8.633c.148.032.293.084.428.154.05.025.108.037.165.035.063-.003.125-.016.183-.04.267-.1.506-.263.694-.477.01-.01.018-.023.025-.035V8.265c.003-.025.02-.047.042-.058h.03c.04-.005.084-.005.126 0 .076.01.15.025.225.046.077.02.152.048.223.085.05.024.088.062.113.108V8.455c-.01-.014-.028-.02-.046-.02h.015c.12-.077.227-.17.32-.274.053-.052.105-.104.16-.156.06-.06.13-.11.21-.144.027-.015.062-.012.088.007s.038.05.032.083c-.006.03-.03.057-.06.065h-.017c-.053.03-.1.066-.144.108l-.153.15s-.102.104-.158.154c-.057.057-.12.106-.19.146-.028.016-.06.026-.09.03-.038 0-.073-.014-.097-.043-.01-.013-.016-.027-.02-.042-.012-.018-.028-.033-.047-.042-.06-.032-.12-.057-.185-.075-.067-.02-.137-.035-.207-.045-.03-.003-.058-.003-.088 0 .028-.012.045-.04.044-.07v-.018V8.328l-.016.026c-.013.02-.028.037-.044.054-.108.117-.227.208-.335.306-.054.053-.116.096-.185.127l-.108.044c-.02.007-.037.017-.052.03-.018.01-.037.017-.056.022-.156.054-.325.06-.483.01-.123-.065-.255-.116-.39-.15-.046-.01-.077-.052-.07-.098s.052-.076.098-.068l.02-.006zM7.525 11.554c.15.032.294.084.43.154.05.025.107.037.164.035.062-.003.124-.016.182-.04.267-.1.506-.263.694-.477.01-.01.018-.023.025-.035V11.188c0-.033.02-.062.05-.073h.03c.042-.005.085-.005.127 0 .076.01.15.025.225.046.077.02.152.048.223.085.048.024.087.062.113.108v.008c-.01-.013-.028-.02-.046-.02h.015c.12-.076.227-.168.32-.273.053-.052.105-.104.16-.156.06-.06.13-.11.21-.143.04-.01.083.01.098.05s0 .084-.04.104h-.016c-.054.03-.102.067-.145.11-.052.047-.102.097-.154.15s-.1.103-.157.153c-.056.057-.12.106-.19.146-.027.015-.058.025-.09.028-.037.002-.072-.013-.096-.042-.01-.013-.016-.027-.02-.042-.012-.018-.028-.033-.047-.042-.06-.032-.12-.057-.185-.075-.068-.02-.138-.036-.208-.046-.03-.002-.058-.002-.088 0 .027-.01.044-.04.043-.07v-.017V11.21c.006.01.01.023.013.035-.004.01-.01.02-.015.027-.012.02-.027.037-.043.054-.108.117-.227.208-.335.306-.054.053-.116.096-.185.127l-.108.043c-.02.007-.038.017-.053.03-.018.01-.037.017-.056.022-.155.055-.324.06-.482.013-.123-.067-.253-.12-.387-.156-.044-.008-.075-.05-.067-.097s.05-.076.097-.068l-.004.002zM7.452 9.57c.16.03.315.08.463.15.124.05.263.05.387 0 .146-.018.265-.136.417-.195.133-.076.255-.173.36-.288l.03-.037v.017s0 .023 0 0c-.003-.013-.003-.027 0-.04.007-.015.02-.027.033-.035.01-.005.022-.01.033-.01.046-.006.092-.006.137 0 .08.01.162.023.242.042.082.018.163.045.24.08.05.02.092.055.123.1 0 0 .027.055.015.028s-.033-.03-.044-.025c-.01.004 0 0 .014 0 .13-.076.25-.17.356-.277.058-.054.117-.106.177-.158.066-.062.143-.11.227-.144.03-.013.062-.01.087.01s.037.052.03.083c-.005.032-.03.056-.06.064h-.014c-.06.03-.115.067-.165.112-.057.048-.114.1-.172.154s-.115.106-.177.158c-.062.058-.132.107-.207.146-.03.017-.065.025-.1.025-.018-.002-.036-.007-.052-.016-.016-.01-.03-.024-.04-.042l-.01-.023c-.016-.02-.036-.037-.06-.047-.066-.03-.136-.056-.207-.073-.073-.02-.146-.034-.22-.044-.032-.003-.064-.003-.095 0h.01c.014-.007.025-.02.03-.033.005-.014.005-.028 0-.042 0-.024 0 0 0 0 .002.03-.01.06-.028.082-.015.02-.03.036-.048.052-.12.117-.252.208-.373.31-.134.096-.282.17-.438.22-.08.026-.165.04-.25.043-.088.007-.176-.003-.26-.03-.136-.064-.28-.114-.427-.147-.045-.007-.076-.05-.07-.096s.05-.076.097-.07l.01-.007z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#e8eef5",
                        stroke: "#d6dbeb",
                        "stroke-width": ".417",
                        "stroke-linecap": "round",
                        "stroke-linejoin": "round",
                        d:
                          "M10.99 7.917c.417.11.833-.088 1.185-.338s.654-.56 1.042-.72l.392 1.287c.164.544.316 1.183-.022 1.64-.18.21-.408.376-.662.485-1.042.54-1.677 1.154-2.708 1.694.667-.294.665-1.098.75-1.823s-.08-1.458-.242-2.163"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M5.056 16.175c-.696-.557-1.264-1.257-1.667-2.052-.208-.395-.363-.815-.464-1.25-.097-.447-.104-.91-.02-1.358.042-.22.104-.438.184-.648.083-.208.18-.404.27-.604.18-.398.384-.777.562-1.165.046-.096.085-.194.127-.292.038-.092.068-.186.09-.283.045-.206.072-.415.084-.625.006-.437.044-.873.115-1.304.02-.126.074-.244.153-.344.048-.052.11-.09.18-.106.075-.02.157-.008.224.033.1.078.177.184.22.304.04.105.076.212.105.32.09.415.212.823.365 1.22.04.088.094.17.158.243.07.077.142.152.208.225l.475.44c.33.308.595.68.777 1.092.183.41.3.845.342 1.292.04.44.028.886-.03 1.325-.116.867-.31 1.72-.584 2.552-.028.087-.12.136-.21.108s-.136-.12-.108-.21c.274-.804.468-1.635.58-2.478.047-.415.056-.833.026-1.25-.033-.415-.134-.822-.3-1.204-.16-.38-.397-.72-.695-1.004l-.47-.446c-.078-.077-.155-.16-.23-.246-.08-.094-.147-.198-.198-.31-.156-.414-.28-.84-.367-1.273-.026-.098-.057-.194-.094-.287-.022-.07-.06-.13-.112-.18h-.02c-.022.004-.04.016-.055.032-.05.06-.08.132-.093.208-.048.415-.067.833-.056 1.25-.003.226-.024.452-.062.675-.018.12-.05.24-.094.354-.046.1-.092.207-.14.3-.192.395-.417.768-.6 1.15-.1.186-.178.383-.235.587-.07.195-.128.395-.172.598-.087.407-.087.828 0 1.235.112.403.27.793.47 1.16.378.754.91 1.42 1.566 1.95.072.058.084.162.026.234s-.162.084-.234.026v.006z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M8.488 14.72c-.023-.442.098-.88.346-1.25.22-.347.467-.678.735-.99.255-.3.494-.616.714-.945.206-.32.357-.672.448-1.042.094-.373.133-.758.115-1.142-.024-.388-.085-.774-.183-1.15-.103-.386-.233-.764-.39-1.13l-.437-1.125c-.152-.373-.292-.748-.452-1.115-.143-.367-.333-.713-.567-1.03-.027-.03-.057-.058-.092-.08-.01-.006-.022-.01-.033-.012h-.025c-.062.048-.105.117-.12.194-.05.19-.087.385-.11.58-.056.404-.135.803-.24 1.197-.106.395-.25.78-.426 1.15-.088.184-.19.366-.292.54-.095.167-.17.344-.22.528-.21.744-.064 1.548.157 2.292v.017c.062.414.098.83.108 1.25 0 .417 0 .833-.013 1.25-.012.42-.052.837-.12 1.25-.07.428-.21.84-.418 1.22-.028.055-.084.09-.145.09s-.12-.03-.15-.083c-.03-.053-.028-.118.004-.17.193-.342.328-.714.398-1.1.065-.398.1-.8.108-1.204.015-.406 0-.813 0-1.22-.007-.41-.037-.816-.092-1.22v.02c-.113-.395-.188-.8-.225-1.212-.042-.42-.006-.843.106-1.25.06-.207.146-.406.255-.592.102-.173.208-.34.285-.517.172-.354.312-.722.417-1.1.104-.384.185-.773.242-1.166.027-.21.068-.42.122-.625.017-.062.04-.12.07-.176.04-.076.1-.14.174-.18.023-.013.047-.022.07-.03.033-.005.066-.005.1 0 .05.004.1.02.145.044.06.035.116.078.163.13.144.163.268.342.37.534.103.18.195.365.282.55.17.37.346.738.483 1.12s.28.757.417 1.14l.208.57.098.294c.037.096.07.193.1.292.24.797.26 1.644.06 2.452-.093.407-.248.798-.46 1.156-.226.345-.475.674-.747.983-.26.298-.498.614-.713.947-.21.305-.318.67-.304 1.042.004.088-.06.164-.15.173s-.168-.053-.18-.14v-.01zM3.28 16.485l-.022-.02c-.095-.05-.18-.115-.25-.195-.01-.01-.02-.023-.027-.035 0-.02 0-.037-.02-.046-.022-.02-.045-.036-.07-.05-.047-.032-.07-.107-.122-.136-.112-.043-.23-.073-.348-.092-.03-.004-.058-.015-.083-.03-.023-.022-.044-.047-.07-.066-.055-.024-.114-.04-.174-.046-.06-.003-.116-.04-.142-.095s-.02-.12.018-.17c.037-.05.098-.075.16-.066h.024l.073.018c.058.017.12.03.177.05.03.012.055.033.073.06.023.02.05.037.08.048.107.056.222.104.336.154.06.023.14.01.18.07s.03.07.05.097c.02.027 0 .017.015.02s.02 0 .027 0c.012.013.023.026.03.04.015.032.034.06.057.084.024.02.076 0 .1.03.06.035.113.08.157.133l-.02-.02c.064.054.076.15.027.22s-.142.09-.216.048l-.02-.005zM2.97 13.542c-.122-.057-.228-.14-.314-.244l-.03-.042v-.03c-.002-.01-.007-.016-.014-.022-.022-.024-.046-.047-.07-.07-.05-.043-.066-.126-.114-.172-.112-.078-.23-.147-.35-.208-.03-.014-.058-.034-.08-.058-.02-.03-.036-.06-.057-.088-.052-.043-.11-.08-.172-.108-.074-.044-.102-.137-.065-.214s.126-.115.207-.086l.02.01.057.037.167.108c.027.022.047.05.058.083.023.025.05.045.08.06.097.088.2.17.31.246.055.035.136.042.168.108.017.03.02.077.037.106s0 .02.015.02c.015.003.02 0 .027 0 .01.015.018.03.026.045.005.036.02.07.04.1.03.017.08 0 .102.033.057.034.11.073.158.12.072.057.084.16.026.233s-.162.083-.234.025v.004z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M9.904 14.6c.17-.346.448-.626.794-.796.32-.16.652-.29.996-.383.662-.207 1.33-.347 1.875-.684.267-.173.502-.394.69-.652.185-.274.323-.577.407-.896.173-.652.243-1.327.208-2l.167.042c-.47.67-1.196 1.042-1.896 1.375-.713.29-1.41.622-2.083.994-.313.186-.595.42-.835.693-.25.287-.502.577-.727.883-.225.31-.42.643-.58.992-.172.312-.253.665-.235 1.02.01.09-.053.17-.14.183s-.172-.044-.19-.13c-.028-.424.065-.846.27-1.218.173-.357.376-.7.608-1.02.227-.322.475-.628.742-.918.27-.3.588-.557.94-.758.688-.366 1.396-.693 2.12-.98.348-.147.683-.322 1.003-.522.154-.1.3-.21.435-.333.13-.123.24-.263.333-.416.043-.067.123-.1.2-.083s.138.082.148.16c.1.71.04 1.43-.17 2.114-.112.342-.27.668-.47.97-.087.16-.2.305-.335.428-.13.13-.273.245-.428.344-.308.172-.634.312-.97.417-.326.127-.657.233-.984.327-.322.087-.635.206-.933.354-.278.133-.506.352-.65.625-.038.083-.137.12-.22.082s-.122-.137-.084-.22l-.003.01z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M13.715 15c.343-.076.673-.204.977-.38.304-.18.583-.395.833-.643.253-.247.47-.527.648-.833.195-.298.327-.63.39-.98l.19.155c-.23.094-.47.175-.71.24-.237.07-.477.124-.717.182-.477.12-.956.237-1.444.31h-.027c-.388-.022-.778.03-1.146.156-.364.128-.704.31-1.01.542-.335.217-.654.458-.955.72-.148.13-.287.268-.417.416-.06.07-.112.145-.158.225-.037.058-.057.123-.058.19.032.066.02.144-.032.195s-.13.064-.193.033c-.065-.032-.103-.1-.094-.172v-.02c-.003-.137.034-.272.108-.386.057-.095.12-.186.193-.27.136-.16.282-.312.438-.453.15-.142.314-.27.472-.398s.335-.234.504-.35c.343-.244.722-.434 1.123-.562.408-.128.838-.176 1.266-.142h-.046c.477-.06.95-.16 1.41-.294.23-.07.456-.148.68-.233s.45-.164.68-.236h.025c.066-.02.138-.004.19.043s.07.12.054.186c-.112.366-.255.722-.43 1.063-.202.325-.442.624-.715.892-.07.065-.13.14-.196.208l-.21.196-.232.17-.246.15c-.335.195-.7.332-1.08.405-.086.01-.165-.048-.182-.132s.032-.167.114-.193h.002zM3.698 16.42c-.143.03-.292.022-.43-.022l-.05-.023-.022-.025c-.007-.006-.015-.01-.023-.012-.03-.012-.067-.017-.098-.03-.067-.016-.12-.086-.18-.107-.13-.034-.274-.034-.418-.062-.034-.003-.067-.013-.098-.03-.028-.02-.055-.045-.082-.066-.063-.025-.13-.043-.196-.054-.09-.014-.152-.098-.14-.19s.1-.15.19-.138h.02l.068.02.188.05c.03.013.06.033.08.06.025.02.055.034.086.043.12.05.242.086.37.11.064 0 .136-.02.19.023s.05.058.078.077c.03.02.012.012.02.01s.02-.01.026 0c.015.007.03.015.044.025.024.023.055.038.087.044.03 0 .066-.042.095-.033.06-.01.12-.01.18 0h.024c.08.015.136.088.132.17s-.068.15-.15.158l.006.002zM1.608 7.662c.363.37.844.648 1.28.988.11.085.22.175.328.27.054.045.108.093.16.143s.092.117.142.17c.12.115.205.26.25.418.02.103.002.21-.052.3-.045.072-.107.134-.18.178-.098.072-.177.165-.232.273-.065.117-.114.24-.146.37-.055.266-.087.535-.096.806-.014.546.007 1.092.063 1.635.005.07-.034.137-.097.166s-.14.015-.188-.035c-.092-.093-.173-.197-.26-.293-.085-.1-.176-.194-.27-.283-.19-.18-.376-.365-.572-.54-.044-.04-.064-.1-.052-.158s.055-.106.11-.124c.058-.018.12-.005.164.035l.012.01.567.544c.095.09.184.186.278.278s.17.208.26.296l-.29.133c-.035-.56-.035-1.123 0-1.683.02-.284.062-.566.127-.844.03-.147.073-.29.125-.43.057-.163.155-.306.285-.418l.027-.023.012-.014.027-.02c.01-.01.03-.022.032-.03s.027-.023.027-.056c-.004-.046-.016-.092-.036-.133-.03-.053-.064-.104-.102-.152-.04-.05-.104-.077-.15-.125s-.094-.094-.144-.14c-.1-.09-.208-.188-.308-.27-.11-.085-.227-.16-.352-.22-.12-.07-.23-.156-.346-.237-.236-.163-.454-.35-.65-.56-.042-.068-.03-.156.028-.21s.147-.06.212-.013l.004.004z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "none",
                        stroke: "#d6dbeb",
                        "stroke-width": ".417",
                        "stroke-linecap": "round",
                        "stroke-linejoin": "round",
                        d:
                          "M10.99 7.917c.417.11.833-.088 1.185-.338s.654-.56 1.042-.72l.392 1.287c.164.544.316 1.183-.022 1.64-.18.21-.408.376-.662.485-1.042.54-1.677 1.154-2.708 1.694"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        opacity: ".4",
                        d:
                          "M7.46 7.223c-.23.45-.394.932-.487 1.43-.092.66.065 1.326.14 1.99.208 1.732-.152 3.476-.5 5.187.723-.804.813.465.977-.604.085-.548.67-3.244.59-3.794l-.644-4.396M11.32 7.95c.128.607.4 1.175.79 1.656.046.065.107.116.178.15.073.02.15.025.225.015.256-.01.51.055.73.184-.785.24-1.52.62-2.168 1.123l.03-2.58c0-.14.022-.31.15-.368M3.258 10.27c-.024.4-.077.797-.158 1.188v.03c-.05.236-.106.474-.17.71s-.132.51-.207.76l-.87-.916-.11-1.28.29.14c.04.025.084.034.128.028.074-.02.09-.113.1-.185.066-.58.344-1.112.78-1.498.026-.03.063-.047.102-.048.063 0 .087.084.094.15.034.305.042.613.023.92z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M17.708 15.283c-.06.08-.15.133-.248.15-.07.01-.14.014-.208.01-.113 0-.225.007-.337.02l-.698.053c-.465.035-.93.052-1.396.112-.232.025-.464.06-.697.073l-.7.036c-.467.02-.93.08-1.396.13l-2.1.224c-.23.027-.465.052-.698.063l-1.39.096-1.395.153c-.93.073-1.875.117-2.798.19l-.348.03c-.11 0-.22.028-.336.047-.12.022-.24.038-.363.048-.062.003-.125.003-.19 0-.078.005-.158-.007-.232-.035-.05-.023-.093-.058-.125-.102-.025-.032-.046-.068-.063-.105-.027-.067-.045-.137-.052-.208-.015-.13 0-.252-.017-.358l-.034-.34c-.012-.128-.012-.245-.012-.36 0-.234 0-.47-.025-.703s-.072-.462-.09-.696l-.114-1.397c-.07-.93-.14-1.865-.223-2.796-.044-.465-.08-.93-.094-1.4-.01-.468-.047-.934-.107-1.398-.075-.464-.09-.932-.12-1.4s-.047-.932-.084-1.4l-.072-.686-.035-.352C.88 2.85.903 2.71.97 2.592c.054-.062.128-.1.21-.108.06-.01.122-.015.184-.017.115 0 .225-.015.344-.023l2.096-.175 1.398-.107c.93-.08 1.858-.208 2.788-.302s1.852-.193 2.783-.276l1.4-.09c.467-.025.93-.094 1.396-.137.926-.085 1.845-.275 2.797-.267h.11l.042.096c.11.292.17.6.176.913 0 .147.017.287.03.428l.045.435.043.875.02.438c0 .146.024.292.036.435l.082.872.048.875c.023.292.073.58.108.87s.044.58.065.872c.02.29.03.582.052.874s.035.583.073.873l.094.87c.03.29.04.584.06.874.027.584.106 1.163.175 1.743.04.29.058.58.087.87.015.14.023.303.046.418.016.08.025.16.03.24 0 .05-.004.102-.016.15-.01.064-.034.123-.07.176zm-.266-.208c.033-.025.027-.156 0-.298s-.027-.298-.044-.448c-.023-.293-.054-.582-.07-.874-.034-.583-.062-1.167-.143-1.746-.03-.29-.077-.58-.1-.87l-.058-.874c-.012-.292-.054-.58-.08-.87s-.068-.58-.105-.872c-.037-.292-.073-.58-.085-.87s0-.586-.025-.878c-.025-.292-.083-.58-.106-.87s-.033-.582-.044-.874c-.02-.583-.137-1.16-.185-1.742l-.03-.438c-.01-.148-.014-.3-.018-.444.007-.273-.032-.546-.118-.806l.144.092c-.23.012-.458.033-.69.058s-.46.056-.694.073c-.465.046-.938.077-1.402.11s-.933.058-1.398.113c-.465.054-.927.13-1.392.177-.93.088-1.863.17-2.794.227s-1.875.075-2.8.167c-.465.043-.93.107-1.394.155s-.93.102-1.394.144l-.698.064-.17.023c-.063.003-.125.003-.186 0-.07-.01-.14-.002-.208.02-.013.022-.02.047-.023.072-.004.05-.004.102 0 .153l.015.344c0 .233.025.467.044.7.063.933.323 1.848.288 2.79-.007.47.037.937.13 1.396.08.463.132.93.157 1.4.056.933.135 1.865.208 2.796l.108 1.403c.02.233 0 .47.02.702s.053.465.084.696c.03.232.046.457.054.707v.344c0 .045.008.09.02.132.006.026.02.05.038.07.04.015.08.023.12.022.056.003.11.003.166 0 .112-.008.224-.022.335-.042.114-.02.232-.037.355-.048l.35-.027c.93-.073 1.863-.165 2.794-.244l1.397-.112 1.394-.16c.932-.09 1.866-.14 2.797-.207.467-.033.933-.063 1.396-.123l.696-.083c.23-.03.466-.035.7-.052.466-.023.93-.088 1.397-.133l.7-.07c.12-.014.24-.023.363-.026.046.005.093.005.14 0 .02-.005.037-.02.044-.042v-.008z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M21.74 19.546c-.076.064-.17.103-.27.113-.27 0-.542-.028-.807-.09L5.336 18.01c-.563-.054-.548-.304-.496-.808s.104-.96.154-1.44l.54-5.06.604-5.67c.142-1.337.294-2.676.427-4.014.03-.32.042-.587.4-.637.344-.02.69.004 1.03.066L9.558.61 19.604 1.63c.692.07 1.38.146 2.07.22.58.064 1.22 0 1.782.16.417.116.183.497.152.807l-.068.676-.208 1.994-.542 5.344-.5 4.844c-.11 1.08-.23 2.16-.348 3.242-.02.248-.046.49-.204.627z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M21.906 19.735c-.104.088-.23.145-.367.165-.112.014-.224.014-.334 0-.208-.023-.383-.07-.54-.092-.35-.038-.712-.083-1.07-.13s-.714-.093-1.074-.112c-.36-.008-.72-.038-1.077-.09-.356-.048-.713-.12-1.07-.154s-.72-.06-1.078-.092l-2.158-.144c-.36-.03-.72-.052-1.078-.094s-.715-.094-1.07-.146c-.357-.052-.716-.092-1.076-.12s-.72-.032-1.08-.066c-.357-.033-.712-.08-1.07-.12l-1.073-.14c-.358-.047-.715-.1-1.07-.14l-.27-.032c-.104-.01-.206-.03-.306-.058-.133-.037-.25-.116-.335-.225-.073-.11-.11-.24-.11-.373.002-.19.015-.38.04-.57.017-.178.03-.358.042-.54.017-.36.037-.72.08-1.076s.14-.71.18-1.07c.024-.178.035-.358.033-.54.003-.18.016-.36.04-.54l.248-2.147c.088-.716.173-1.432.244-2.15s.137-1.432.272-2.143c.06-.356.123-.71.152-1.07s.023-.724.067-1.08c.074-.717.21-1.427.303-2.14.054-.356.08-.717.117-1.075l.04-.53c.01-.096.028-.19.056-.282.033-.114.107-.213.208-.275.095-.053.2-.084.308-.09.096-.008.192-.008.288 0 .188.01.37.04.546.062L8.933.41c.717.078 1.433.15 2.148.243.36.04.718.08 1.076.115l1.08.075c.72.042 1.44.094 2.155.15s1.436.12 2.155.18c.358.03.717.068 1.075.114l1.07.167.537.065.537.047c.356.033.725.058 1.07.08s.707 0 1.086.018c.196.01.39.036.58.08.157.03.296.12.388.25.08.136.107.298.073.453-.02.112-.05.208-.074.28l-.027.107s-.016.085-.02.127c-.023.18-.044.358-.054.538l-.083 1.077c-.027.358-.06.72-.113 1.075s-.127.71-.173 1.07c-.11.712-.096 1.437-.23 2.147-.062.354-.098.713-.107 1.074-.003.36-.03.72-.077 1.077-.102.716-.208 1.428-.28 2.145s-.086 1.44-.21 2.152c-.05.356-.103.713-.13 1.073s-.044.72-.07 1.08c-.028.357-.06.718-.093 1.076l-.054.542c-.01.105-.03.21-.06.31-.036.126-.104.24-.198.333zm-.33-.375c.074-.097.113-.214.113-.335l.06-.53c.04-.36.072-.718.128-1.074.12-.71.196-1.427.223-2.147 0-.36.043-.72.084-1.077l.144-1.07c.075-.718.098-1.44.135-2.16.022-.36.074-.718.156-1.07.074-.354.113-.714.116-1.075 0-.724.208-1.426.25-2.145.033-.358.03-.72.056-1.08s.07-.718.117-1.076c.047-.36.107-.713.147-1.072.025-.18.042-.358.056-.538l.01-.14c0-.058.015-.108.023-.156.02-.096.038-.18.044-.248.003-.027.003-.054 0-.08 0 .01 0 0-.077-.028-.16-.045-.323-.076-.488-.094-.34-.04-.7-.042-1.075-.08s-.717-.1-1.08-.134l-.537-.06-.537-.042-1.08-.042-.54-.037-.54-.055c-.716-.075-1.432-.142-2.147-.235s-1.432-.167-2.143-.294c-.71-.13-1.427-.214-2.148-.248C10.327.9 9.61.844 8.892.786 8.53.756 8.183.72 7.813.684 7.628.664 7.455.64 7.288.626c-.08-.004-.157-.004-.234 0-.052 0-.104.008-.152.027-.02.013-.035.02-.06.07-.025.068-.042.138-.052.21l-.083.532c-.05.356-.097.715-.113 1.075-.048.72-.027 1.446-.11 2.163-.042.358-.167.706-.223 1.062-.046.36-.065.72-.058 1.08.005.362-.012.723-.05 1.082l-.14 1.07c-.098.716-.18 1.43-.256 2.147l-.246 2.146c-.017.18-.046.357-.085.533-.045.182-.075.366-.09.552-.043.358-.026.72-.068 1.08s-.098.714-.154 1.07c-.027.18-.058.356-.08.535-.026.17-.042.34-.05.513 0 .16.03.198.172.248.165.037.333.062.502.074.358.042.717.073 1.075.108.717.073 1.435.133 2.15.208s1.43.17 2.152.208c.36.02.72.03 1.078.065s.717.077 1.075.115l2.146.262c.357.04.714.092 1.072.123s.72.038 1.08.06c.36.02.717.06 1.072.12.356.05.717.068 1.075.1s.714.05 1.08.086c.208.022.375.066.527.076.114.02.23-.005.327-.07l.002.003z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        stroke: "#d6dbeb",
                        "stroke-width": ".417",
                        "stroke-linecap": "round",
                        d:
                          "M18.333 8.635c-.37-.417-1.008-.583-1.59-.583-.156.014-.314 0-.465-.042-.162-.09-.312-.198-.446-.325-.335-.2-.738-.247-1.11-.133-.373.09-.715.26-1.083.358-.123.04-.253.052-.38.038-.158-.027-.296-.12-.452-.158-.344-.083-.723.123-1.042 0-.15-.088-.296-.185-.435-.29-.453-.238-.995.07-1.4.37 0 .007 8.416.786 8.403.766z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M13.68 7.773c-.252-.3-.427-.66-.51-1.042-.06-.232-.07-.475-.026-.712.098-.458.442-.785.688-1.17.188-.293.165-.95.385-.982s.08.625.223.888c.092.165.22.3.31.465.178.37.217.792.108 1.19s-.27.774-.483 1.126z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M15.154 7.5c.044-.438.61-.72.944-1.077.417-.454.47-1.042.36-1.612s-.294-1.693-.475-1.666c-.18.027-.177.69-.775 1.348-.28.308-.304.756-.27 1.154 0 0-.057 1.358-.526 1.875zM13.056 6.577L11.78 4.97c-.147.322-.23.67-.24 1.026.007.385.173.75.46 1.008.257.238.793.485.955.758z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M15.708 7.596c.308-.43 1.106-.19 1.638-.467.477-.25.658-.884.704-1.33-.454.48-1.506.377-2.083.775 0 0-.896.673-.908 1.117z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f8fafc",
                        d:
                          "M17.125 8.065c.61-.014 1.152-.387 1.383-.95-.384.077-.777.105-1.17.083-.31-.084-.64-.053-.93.088-.5.237-.783.423-.783.558zM11.13 7.5c-.24-.224-.378-.535-.382-.862.365.134.742.23 1.127.283 0 0 .752.745 1.22.834z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#e8eef5",
                        d:
                          "M13.467 5.27c.38-.176-.625-.786-.688-1.2-.257.395-.43.836-.51 1.3l.755 1.126s.1-1.07.442-1.225z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M15.242 4.504c.06.023.12.053.173.09.01.008.023.013.035.017.02.005.04.005.058 0 .11.006.218-.034.298-.11-.003.008-.003.017 0 .026 0-.022.01-.043.03-.056.02-.012.016 0 .022-.01h.027c.02 0 .042.005.063.01.032.01.063.02.094.033.033.014.065.032.094.054.025.02.043.046.05.077v.02c0-.012-.004-.023-.01-.032-.01-.016-.028-.028-.048-.03h-.017c.052-.015.1-.04.14-.074l.076-.052c.033-.025.072-.043.113-.052.045-.003.085.03.09.077s-.032.087-.078.09c0 0-.023.014-.042.028l-.07.048c-.022.017-.047.035-.072.05-.03.02-.063.037-.098.046h-.023c-.014.003-.028.003-.042 0-.028-.004-.052-.02-.067-.044-.008-.013-.013-.027-.015-.042 0 .02 0 0 0 0-.018-.014-.038-.026-.058-.035l-.07-.028c.008-.003.016-.007.024-.013.02-.016.032-.04.032-.066-.002.017-.007.033-.015.048-.003.006-.008.012-.013.017-.01.01-.02.018-.03.026-.054.033-.107.07-.157.108-.023.024-.055.036-.088.033h-.055s-.017 0-.025.013c-.01.002-.018.002-.027 0-.036 0-.073-.003-.108-.01-.04-.003-.08-.012-.117-.027-.043-.03-.088-.057-.135-.08-.037-.02-.054-.064-.04-.103s.06-.06.1-.05l-.002.006zM13.47 5.27c.058.016.113.036.166.06.032.015.067.022.102.024.046.025.092 0 .148 0s.102-.033.142-.056h.01s-.025.042-.02.048c0-.03.018-.057.045-.07h.017c.022-.002.045-.002.067 0l.085.022c.03.01.06.02.088.033.022.01.04.026.056.045.01.01.016.024.02.038v.01c.002-.007.002-.014 0-.02-.006-.014-.017-.024-.03-.03-.01-.003-.02-.003-.03 0 .046-.003.092-.017.132-.042.055-.032.115-.056.177-.072.04-.006.077.017.088.055s-.007.078-.042.095l-.04.017s-.074.03-.116.054l-.075.034c-.032.015-.066.023-.1.025h-.024c-.018-.002-.036-.007-.052-.016-.023-.014-.04-.038-.046-.065.002.006.006.012.01.018l-.063-.027-.07-.02s-.034 0 0 0h.018c.032-.014.052-.046.05-.08 0 .026-.01.05-.03.07l-.022.017-.024.012c-.055.02-.107.045-.156.076-.046.042-.123-.015-.18.01s-.064-.01-.097-.017c-.033-.007-.075 0-.104-.016-.045-.02-.09-.04-.136-.056-.044-.013-.07-.06-.057-.103s.06-.07.103-.057l-.008-.02zM11.513 6.192c.05-.004.1-.004.148 0 .03.003.057.003.084 0 .017-.01.042 0 .058-.01.018-.013.04-.02.06-.025.052 0 .07-.052.096-.08v-.01c-.004.012-.004.026 0 .04v.01c-.014-.03-.006-.064.02-.084.017-.01.037-.015.057-.02l.073-.01c.026-.003.05-.003.077 0 .02-.002.04.003.058.01.012.006.022.013.03.022 0 0 .02.023 0 .01-.01-.014-.024-.023-.04-.027-.013-.004-.026-.004-.038 0 .036-.013.068-.035.092-.065.035-.04.076-.078.12-.108.034-.02.076-.012.1.018s.023.073-.004.1l-.108.11c-.034.04-.077.072-.125.093h-.02c-.02.005-.04.005-.057 0s-.035-.016-.048-.03c-.01-.016 0 0 0 0l.017.01h-.115c-.044.014.044-.03 0 .012s-.077.058-.1.106c-.016.022-.042.033-.07.03-.032 0-.047.024-.074.024l-.08.013c-.028 0-.057.03-.086.026s-.08 0-.12 0c-.043 0-.08-.032-.084-.074s.023-.08.064-.09h.015zM11.446 5.958c.047-.008.094-.013.142-.015.03-.002.057-.005.085-.01.017-.01.042 0 .058 0 .02-.01.04-.018.06-.02.053 0 .074-.05.1-.076v-.01c-.005 0-.01.003-.016.006-.005.013-.005.028 0 .042-.017-.03-.007-.07.023-.09.018-.01.037-.017.056-.02l.07-.016h.076c.017-.005.035-.005.053 0 .01.002.02.007.03.014l.022.02s-.015-.02-.03-.022c-.053-.012-.047 0-.05 0 .037-.01.07-.03.095-.058.036-.038.077-.07.12-.1.035-.018.078-.008.1.023s.022.074-.005.102l-.033.03s-.05.042-.077.07c-.035.04-.08.068-.127.086-.027.012-.058.012-.085 0-.017 0-.044-.035-.037-.027l.017.014H12.096h-.115c.037-.023.05-.07.028-.108.006.018.006.038 0 .056-.002.01-.005.02-.01.03l-.012.014-.017.015c-.038.036-.078.053-.103.1-.017.02-.043.028-.07.022-.03 0-.045.025-.072.02l-.077.01c-.025 0-.054.032-.08.028s-.082 0-.12 0c-.043 0-.08-.03-.085-.073s.022-.082.064-.092l.02.033zM17.427 6.85c-.013-.04-.023-.078-.03-.12v-.018c.003-.01.003-.02 0-.03 0-.038-.03-.047-.04-.09s-.053-.045-.078-.057c.016.008.036.008.053 0-.024.016-.055.016-.08 0l-.014-.013c-.01-.014-.02-.03-.026-.046 0-.02-.015-.037-.02-.058s-.013-.043-.016-.065c-.005-.018-.005-.038 0-.056.004-.012.01-.023.02-.033l-.016.017c-.008.014-.012.03-.01.045-.003.01-.003.022 0 .033 0 0-.03-.048-.063-.058-.043-.02-.08-.047-.114-.08-.02-.024-.024-.058-.01-.086s.042-.047.074-.048c.032 0 .06.017.075.045 0 0 .038.024.065.036.04.02.073.047.098.083l.01.016c.008.015.013.03.015.048 0 .018-.005.035-.015.05l-.017.02c.007-.008.01-.016.013-.024 0-.017 0 0 0 0v.04l.01.042s.012.023 0 0l-.015-.013c-.03-.022-.07-.022-.098 0 .022-.017.05-.022.077-.016h.023l.02.01c.04.02.06.05.103.058s.025.088.065.108l.02.067c0 .02.036.044.036.07s.012.062.017.09c.01.042-.017.084-.06.096s-.085-.012-.1-.053l.023-.01zM17.763 7.877c-.024-.033-.044-.068-.063-.104v-.017c-.004-.01-.01-.02-.017-.027 0-.04-.042-.036-.063-.074s-.065-.03-.094-.033c0 0 .046-.012.05-.025-.018.024-.05.034-.077.025h-.018c-.014-.01-.027-.023-.038-.037l-.037-.048c-.013-.018-.024-.037-.033-.056-.005-.018-.005-.038 0-.056-.002-.012-.002-.025 0-.038v.02c-.005.014-.005.03 0 .045.003.01.01.02.02.03-.02-.023-.05-.036-.078-.04-.045-.007-.09-.02-.13-.043-.034-.03-.038-.083-.008-.118s.083-.04.118-.01c0 0 .044 0 .073.016.043.006.084.024.118.052l.015.012c.012.012.02.026.027.042.01.024.01.05 0 .075.002-.01.002-.018 0-.026 0-.015 0 0 0 0 .005.012.01.024.017.035l.023.037s.02.02 0 0h-.02c-.033-.01-.07.002-.09.03.016-.02.04-.033.068-.034h.044c.044 0 .07.03.117.025s.047.077.093.085l.04.058c.012.02.048.032.054.055s.03.056.042.08c.02.04.008.09-.03.113s-.088.013-.113-.024l-.012-.027zM17.467 7.98c-.026-.04-.05-.078-.07-.12-.01-.02-.022-.04-.036-.058 0-.04-.05-.042-.076-.08s-.075-.034-.108-.04c0 0 .042 0 .05-.026s-.038.038-.067.025c-.03-.01-.018 0-.026 0-.016-.01-.03-.024-.042-.04l-.042-.055c-.014-.02-.027-.042-.037-.065-.01-.018-.013-.038-.012-.058v-.038c.018-.038-.016.027 0 .05.004.01.01.022.02.03-.025-.026-.057-.042-.092-.047-.05-.01-.1-.028-.144-.052-.035-.03-.04-.083-.01-.118s.084-.04.12-.01c0 0 .053.018.086.024.05.01.095.03.133.06l.017.016c.012.012.02.027.027.044.017.03-.02.098 0 .065.002-.008.002-.015 0-.023 0-.012 0 0 0 0l.02.044.028.044s.02.02 0 0 .012 0-.027-.01c-.04-.01-.09.033-.08.03s.072-.04.07-.034h.048c.042.018.086.03.13.033.026 0 .047.017.055.04 0 .014.01.028.026.032s.02.015.03.02c.007.007.028.043.045.063s.05.035.06.06c.007.025.034.067.05.098.018.038.006.085-.03.108s-.084.016-.11-.017l-.002.006zM17.06 8.102c-.026-.038-.05-.077-.07-.12-.01-.02-.022-.04-.037-.057 0-.04-.052-.042-.077-.08s-.075-.034-.108-.04c0 0 .042 0 .05-.026s-.037.036-.067.024c-.028-.012-.016 0-.024 0-.016-.01-.03-.025-.042-.04l-.042-.056c-.014-.02-.027-.042-.038-.065-.01-.018-.013-.038-.012-.058-.002-.012-.002-.025 0-.037.017-.038-.017.027 0 .05.003.01.01.02.02.03-.026-.026-.058-.042-.093-.047-.05-.01-.1-.027-.145-.05-.035-.03-.04-.084-.01-.12s.084-.038.12-.008c0 0 .053.017.086.023.05.01.096.03.134.06l.017.015c.013.012.022.027.028.044.017.03-.02.098 0 .065.002-.01.002-.016 0-.024 0-.013 0 0 0 0l.02.044.028.044s.02.02 0 0 .012 0-.027-.01c-.04-.01-.09.033-.082.03s.073-.04.07-.034h.05c.04.018.085.03.13.033.025 0 .046.018.054.042 0 .012.01.027.025.03s.02.016.03.022c.007.006.028.042.045.063s.05.035.058.06c.008.025.035.067.05.098.02.038.007.085-.03.108s-.083.015-.11-.018v.006zM17.135 7.065c-.013-.04-.023-.078-.03-.12v-.018c.003-.01.003-.02 0-.03 0-.04-.03-.047-.04-.09s-.053-.045-.078-.057c.017.008.037.008.054 0-.023.016-.054.016-.078 0l-.015-.012c-.01-.014-.02-.03-.025-.046 0-.02-.015-.038-.02-.058s-.013-.043-.016-.065c-.005-.02-.005-.04 0-.057.004-.012.01-.023.02-.033l-.016.017c-.008.013-.012.028-.01.044-.003.012-.003.023 0 .034 0 0-.03-.048-.063-.058-.042-.02-.08-.047-.113-.08-.02-.037-.007-.084.03-.107s.083-.016.11.017c0 0 .036.023.064.035.04.02.073.047.098.083l.01.017c.008.015.013.03.015.048 0 .018-.004.035-.014.05L17 6.6c.005-.008.01-.016.01-.024 0-.017 0 0 0 0v.04l.01.042s.013.023 0 0l-.014-.012c-.03-.02-.07-.02-.098 0 .022-.016.05-.02.077-.015h.023l.02.01c.04.022.06.05.103.06s.026.087.066.107l.02.067c0 .02.036.044.036.07s.012.06.017.09c.008.042-.02.084-.06.096s-.087-.012-.102-.053l.023-.01zM16.908 7.185c-.013-.04-.023-.078-.03-.12v-.018c.003-.01.003-.02 0-.03 0-.038-.03-.047-.04-.09s-.053-.045-.078-.057c.017.008.037.008.054 0-.024.016-.055.016-.08 0l-.014-.013c-.01-.014-.02-.03-.025-.046 0-.018-.015-.037-.02-.057s-.013-.043-.016-.065c-.006-.018-.006-.038 0-.056.003-.012.01-.023.018-.033l-.015.016c-.008.013-.012.028-.01.044-.003.01-.003.022 0 .033 0 0-.03-.048-.063-.058-.042-.02-.08-.047-.113-.08-.02-.024-.024-.058-.01-.086s.042-.048.074-.05c.033 0 .062.018.076.046 0 0 .038.023.065.035.04.02.074.048.1.084l.01.017c.007.016.012.032.014.05 0 .017-.005.034-.015.05l-.018.018c.006-.007.01-.015.012-.023 0-.017 0 0 0 0v.04l.01.042s.012.023 0 0l-.015-.013c-.03-.02-.07-.02-.1 0 .023-.016.05-.02.078-.015h.023l.02.01c.04.02.06.05.104.057s.025.088.065.108l.02.067c0 .02.035.044.035.07s.013.062.017.09c.01.042-.018.084-.06.096s-.086-.012-.1-.053l.022-.01zM16.11 7.5c-.013-.04-.023-.078-.03-.12v-.018c.003-.01.003-.02 0-.03 0-.04-.03-.047-.04-.09s-.053-.045-.078-.057c.017.008.037.008.054 0-.024.016-.055.016-.08 0l-.014-.013c-.01-.014-.02-.03-.025-.046 0-.02-.015-.038-.02-.058s-.013-.043-.016-.065c-.004-.018-.004-.038 0-.056.005-.012.01-.023.02-.033l-.015.017c-.008.014-.012.03-.01.045-.003.01-.003.022 0 .033 0 0-.03-.048-.063-.058-.042-.02-.08-.047-.113-.08-.02-.024-.025-.058-.01-.086s.04-.047.073-.048c.032 0 .06.017.075.045 0 0 .037.024.065.036.04.02.073.047.098.083l.01.016c.01.015.014.03.016.048 0 .018-.005.035-.015.05l-.016.02c.006-.008.01-.016.012-.024 0-.017 0 0 0 0v.04l.01.042s.012.023 0 0l-.015-.012c-.028-.02-.068-.02-.097 0 .022-.016.05-.02.077-.015h.023l.02.01c.04.02.06.05.103.058s.025.088.065.108l.022.068c0 .02.035.044.035.07s.012.062.017.09c.01.042-.018.084-.06.096s-.086-.012-.1-.053l.022-.01zM11.762 6.592c.05-.004.1-.004.148 0 .028.003.056.003.083 0 .017-.01.042 0 .058-.01.02-.013.04-.02.06-.025.053 0 .072-.052.097-.08v-.01c-.004.012-.004.026 0 .04v.01c-.014-.03-.006-.064.02-.084.018-.016.04-.028.064-.035l.074-.013c.026-.002.05-.002.077 0 .02 0 .04.004.06.013.01.005.02.012.03.02 0 0 .02.024 0 .01-.01-.013-.025-.022-.042-.026-.012-.004-.025-.004-.037 0 .037-.013.07-.035.093-.065.035-.04.076-.078.12-.108.034-.02.076-.013.1.017s.023.073-.004.1l-.11.11c-.033.04-.076.072-.124.093h-.02c-.02.005-.04.005-.057 0s-.036-.016-.05-.03c-.01-.016 0 0 0 0 .006.004.01.007.018.01h-.115c-.044.014.044-.03 0 .012s-.077.058-.1.106c-.016.022-.042.033-.07.03-.032 0-.047.024-.074.024l-.082.012c-.027 0-.056.03-.085.025s-.08 0-.12 0c-.043 0-.08-.033-.084-.075s.022-.08.063-.09l.008.018zM12.11 6.913c.05-.004.1-.004.148 0 .028.003.056.003.083 0 .018-.01.043 0 .06-.01.017-.013.038-.02.06-.025.05 0 .07-.052.095-.08v-.01c-.004.012-.004.026 0 .04v.01c-.014-.03-.006-.064.02-.084.017-.01.037-.015.057-.02l.073-.012c.026-.002.05-.002.077 0 .02 0 .04.004.058.013.012.005.022.012.03.02 0 0 .02.024 0 .01-.01-.013-.024-.022-.04-.026-.013-.005-.026-.005-.038 0 .036-.014.068-.036.092-.066.035-.04.076-.078.12-.108.03-.033.08-.037.11-.008s.038.078.01.11l-.11.108c-.033.04-.076.073-.124.094h-.02c-.02.005-.04.005-.057 0s-.035-.016-.048-.03c-.01-.016 0 0 0 0l.017.01h-.115c-.044.014.044-.03 0 .01s-.077.06-.1.107c-.016.022-.042.033-.07.03-.032 0-.047.024-.074.024l-.08.014c-.028 0-.057.03-.086.025s-.08 0-.12 0c-.043 0-.08-.033-.084-.075s.023-.08.064-.09l-.008.018zM13.358 5.725c.07.015.14.036.208.063.05.017.104.028.158.03.03 0 .063.02.094 0 .033-.003.067-.003.1 0 .068.003.134-.015.192-.05h.02l-.016.01c-.01.015-.014.032-.01.05-.004-.014-.004-.028 0-.04.01-.018.024-.03.042-.036.02-.004.038-.004.056 0h.03l.105.02c.037.01.073.02.108.032.023.007.044.02.063.033.018.013.032.03.04.052v-.01c-.003-.01-.008-.016-.015-.022-.046-.033-.042-.015-.04-.02.062 0 .124-.013.18-.04.072-.028.146-.05.222-.064.04 0 .075.03.08.07s-.017.08-.055.093h-.025c-.058.014-.115.032-.17.054-.07.032-.146.05-.222.053-.033.003-.066-.008-.09-.03l-.02-.028V5.93v.017c-.006-.008-.016-.014-.026-.017l-.088-.03-.093-.024h-.02.012c.028 0 .054-.018.068-.044.005-.016.005-.032 0-.048.003.024-.003.047-.017.067-.004.008-.01.014-.018.02l-.02.01-.03.01c-.072.017-.142.042-.208.073-.035.014-.074.014-.108 0-.04-.015-.077.01-.112 0l-.113-.02c-.04.003-.08 0-.12-.01-.07-.03-.123-.045-.183-.064-.045-.012-.072-.057-.06-.102s.055-.072.1-.06v.016z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M13.125 6.633c.07.015.14.036.208.063.05.017.104.028.158.03.032 0 .064.02.095 0 .033-.003.067-.003.1 0 .068.003.134-.015.192-.05h.02l-.016.012c-.01.014-.013.03-.01.048-.003-.013-.003-.027 0-.04.01-.017.025-.03.043-.035.02-.003.038-.003.056 0h.028l.106.022c.037.008.073.02.108.03.023.008.044.02.063.034.018.013.032.03.04.052v-.01c-.003-.008-.008-.015-.015-.02-.046-.034-.042-.016-.04-.02.062 0 .124-.014.18-.04.072-.03.146-.05.222-.065.03-.01.066 0 .088.024s.028.06.014.09-.044.05-.077.05h-.025c-.058.013-.115.03-.17.053-.07.03-.146.05-.222.052-.033.003-.066-.008-.09-.03l-.02-.028V6.84v.016c-.006-.008-.016-.014-.026-.017l-.088-.032-.092-.023h-.02.012c.022-.007.04-.023.05-.044.005-.015.005-.03 0-.047.003.024-.003.047-.017.067l-.02.02-.02.01-.03.01c-.072.016-.142.04-.208.072-.035.014-.074.014-.108 0-.04-.015-.077.01-.113 0l-.09.002c-.042.002-.082-.002-.122-.013-.07-.028-.123-.043-.183-.06-.045-.012-.072-.057-.06-.102s.055-.072.1-.06l-.002-.005zM13.156 6.158c.075.015.15.036.22.063.055.017.11.027.166.03.017-.002.033-.002.05 0 .017.015.033 0 .05 0 .035-.004.07-.004.106 0 .073.004.145-.014.208-.05.02 0 .025-.01.03-.02.043-.02.024 0 .032-.01h.073l.113.02c.038.008.076.02.113.03.023.008.045.018.065.032l.026.02c.008.01.014.02.02.03v-.017l-.038-.023c.065.008.132.004.196-.013.075-.03.154-.052.233-.066.04 0 .074.032.08.072s-.018.078-.057.09h-.025c-.063.014-.125.032-.185.055-.075.032-.155.05-.235.05h-.03c-.024-.002-.046-.015-.062-.034-.017-.02-.023-.044-.017-.027l.012.016c-.01-.008-.02-.014-.033-.017l-.098-.032-.1-.025h-.023c.01 0 .022-.005.03-.01.023-.014.037-.038.038-.065v-.023c.005.032-.006.064-.03.085l-.022.013h-.02l-.032.01c-.07.017-.14.04-.208.07-.037.015-.078.015-.115 0-.02 0-.04-.014-.06 0-.02.004-.04.004-.058 0l-.12-.02c-.04.002-.083-.002-.124-.013-.075-.03-.13-.046-.198-.065-.03-.007-.052-.028-.06-.057s-.003-.06.018-.08c.02-.023.05-.032.08-.025l-.006.004zM15.444 4.048c.054.023.105.053.152.09.015.01.01 0 .017.01.014.004.03.004.044 0 .02.013.04 0 .063 0 .024-.01.05-.016.075-.02.052 0 .085-.062.112-.09-.002.01-.002.016 0 .024 0 .03 0-.037.03-.052.017-.01.035-.014.053-.012s.038.006.056.012c.03.01.057.02.083.035.03.015.058.035.082.058.02.023.033.052.035.083 0-.02-.01-.037-.027-.048-.01-.017-.056-.02-.052-.017h-.012c.044-.015.084-.04.117-.074l.063-.052c.03-.027.064-.046.102-.056.03-.003.06.01.076.034s.02.056.008.083c-.012.027-.038.046-.068.05.02 0-.012.01-.027.024l-.056.047c-.04.04-.09.075-.143.098h-.05c-.026 0-.052-.007-.073-.023-.02-.018-.03-.042-.033-.07v.014c-.008-.01-.017-.022-.028-.03l-.056-.03h-.015c.017 0 .034-.003.047-.013.018-.012.03-.03.035-.052 0-.028 0-.01 0 0-.002.016-.007.03-.015.043-.007.01-.016.02-.025.03-.104.07-.15.168-.302.168-.07.002-.142-.01-.208-.036-.035-.03-.073-.055-.112-.077-.042-.02-.06-.068-.042-.11s.068-.06.11-.042l-.015.002zM15.223 5c.06.023.12.053.173.09.01.008.023.013.035.017.02.004.04.004.06 0 .11.007.216-.03.297-.106-.003.01-.003.02 0 .028 0-.022.01-.043.03-.056.02-.013.016 0 .022-.01h.026c.02 0 .042.005.063.01.03.01.062.02.093.033.033.014.065.032.094.054.025.018.043.045.05.076v.02c0-.012-.004-.023-.01-.032-.01-.016-.028-.028-.048-.03h-.018c.05-.015.1-.04.14-.074l.075-.052c.033-.025.072-.043.113-.052.046-.003.086.03.09.077s-.03.086-.077.09c0 0-.023.012-.042.027l-.068.048c-.023.017-.048.035-.073.05-.03.02-.064.037-.1.046h-.022c-.014.003-.028.003-.042 0-.028-.004-.052-.02-.067-.044-.01-.013-.014-.027-.016-.042 0 .02 0 0 0 0-.018-.014-.038-.026-.058-.035l-.07-.03c.008-.002.016-.006.024-.01.02-.016.033-.04.033-.066-.002.017-.007.033-.015.048-.003.006-.008.012-.013.017-.01.01-.02.02-.03.027-.054.032-.107.068-.157.107-.023.024-.055.036-.088.033h-.054s-.017 0-.025.013h-.024c-.036 0-.073-.003-.108-.01-.04-.003-.08-.012-.117-.027-.042-.03-.087-.057-.134-.08-.037-.02-.054-.064-.04-.103s.06-.06.1-.05h-.004z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M14.965 6.133c.06.023.12.053.173.09.01.008.023.013.035.017.02.004.04.004.058 0 .112.005.22-.035.3-.113-.004.01-.004.018 0 .027 0-.022.01-.043.028-.056.02-.012.017 0 .023-.01h.028c.02 0 .042.005.063.01.033.01.064.02.095.033.033.015.065.033.094.055.024.02.042.046.05.077v.02c-.002-.012-.005-.023-.01-.032-.012-.016-.03-.028-.05-.03h-.016c.05-.015.1-.04.14-.074l.075-.052c.032-.025.07-.043.11-.052.047-.003.087.03.09.077s-.03.085-.076.09c0 0-.023.012-.042.026l-.07.048c-.022.017-.047.035-.072.05-.03.02-.063.037-.098.046h-.023c-.015.003-.03.003-.043 0-.028-.004-.052-.02-.067-.044-.008-.013-.013-.027-.015-.042 0 .02 0 0 0 0-.018-.014-.038-.026-.058-.035l-.077-.01c.01-.002.017-.006.025-.01.02-.016.033-.04.033-.066-.002.017-.007.033-.015.048-.003.006-.008.012-.012.017-.008.01-.018.018-.028.026-.055.033-.108.07-.158.108-.023.024-.055.036-.088.033h-.054s-.017 0-.025.012h-.027c-.036 0-.073-.004-.108-.01-.04-.004-.08-.013-.117-.028-.043-.03-.088-.057-.135-.08-.037-.02-.054-.064-.04-.103s.06-.062.1-.05l.004-.016zM15.08 5.346c.066.023.128.053.186.09.014.01.03.015.046.02.022.003.045.003.067 0 .118.006.236-.034.326-.11-.007.008-.012.02-.012.03-.002-.01-.002-.02 0-.03.008-.02.023-.033.042-.04h.025c.024 0 .047.003.07.01.034.008.067.02.1.032.035.014.07.03.1.052.026.017.045.042.056.07V5.476c-.01-.018-.024-.033-.044-.04h-.023c.055-.013.108-.038.153-.073l.083-.052c.036-.024.076-.04.12-.05.045 0 .082.037.082.083s-.037.083-.083.083c0 0-.03.015-.05.03l-.075.047c-.025.017-.052.035-.08.05-.033.02-.07.036-.107.044h-.027c-.016.004-.032.004-.048 0-.028-.008-.05-.03-.06-.056V5.52c0 .015 0 0 0 0-.02-.015-.043-.027-.067-.038-.045-.02-.128-.058-.087-.02-.06.03-.118.068-.173.107-.026.024-.06.035-.096.03h-.056s-.017.014-.027.014h-.003c-.038 0-.075-.004-.112-.012-.04-.003-.082-.012-.12-.027-.05-.03-.1-.058-.15-.08-.04-.018-.06-.063-.045-.104s.058-.063.1-.052l-.008.01z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#e8eef5",
                        stroke: "#d6dbeb",
                        "stroke-width": ".417",
                        "stroke-linecap": "round",
                        "stroke-linejoin": "round",
                        d:
                          "M16.58 5c.166.063.35.05.503-.04.147-.088.303-.158.467-.208l.058.538c.025.227.037.49-.13.644-.088.07-.19.118-.3.142-.447.135-.745.33-1.193.465.285-.066.344-.382.43-.662.073-.284.096-.577.068-.87"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M13.552 7.88c-.247-.28-.432-.61-.542-.966-.056-.18-.088-.37-.094-.558-.002-.296.084-.586.246-.833.06-.066.116-.136.17-.208l.312-.417c.208-.23.233-.573.373-.927.023-.053.06-.1.104-.14.032-.022.07-.036.107-.04.046-.002.09.014.125.045.044.045.073.103.083.165.01.046.017.093.02.14.008.166.028.33.06.494.01.032.023.062.04.09.022.033.044.066.068.098l.16.208c.117.153.202.328.25.515.05.183.066.374.046.563-.024.183-.068.363-.132.535-.114.337-.254.665-.417.98-.022.06-.076.098-.137.105s-.122-.023-.156-.075-.036-.118-.006-.173v-.012c.16-.293.29-.6.393-.92.047-.15.085-.307.112-.464.022-.156.014-.314-.023-.467-.032-.15-.095-.292-.185-.417l-.152-.208c-.027-.038-.052-.08-.077-.12-.03-.052-.05-.107-.065-.163-.033-.18-.05-.362-.054-.545-.004-.036-.01-.073-.016-.108 0-.027-.023-.054 0-.023.018.017.042.026.067.027.01.003.022.003.032 0l-.015.034c-.04.15-.066.3-.08.454-.016.096-.042.19-.078.28-.02.054-.047.104-.078.15l-.083.11c-.113.145-.245.26-.35.39-.03.03-.055.062-.078.097-.023.033-.033.075-.052.11-.042.067-.08.137-.115.208-.07.142-.106.298-.102.456.024.16.064.32.12.472.095.308.25.595.457.844.04.07.024.16-.04.212s-.153.05-.214-.003l-.004.004z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M14.99 7.49c.025-.198.113-.382.25-.527.115-.126.24-.244.37-.352.238-.172.433-.397.57-.657.12-.266.174-.558.156-.85 0-.157-.02-.314-.056-.467l-.085-.47c-.033-.155-.048-.316-.08-.472-.023-.15-.064-.298-.124-.438-.004-.01-.01-.017-.018-.025.005.003.01.003.017 0-.014.013-.025.028-.032.045-.03.068-.058.137-.08.208-.05.158-.11.312-.18.463s-.15.294-.246.43c-.048.068-.104.134-.156.207-.044.054-.08.114-.11.177-.105.276-.133.574-.08.865v.02c-.015.347-.07.69-.168 1.022-.036.166-.084.33-.144.49-.06.173-.148.336-.258.483-.058.072-.163.085-.235.027s-.084-.163-.026-.235l.01-.015c.09-.116.16-.245.208-.383.053-.147.094-.297.125-.45.035-.154.06-.313.098-.47.035-.155.057-.314.065-.474v.02c-.05-.353-.002-.713.142-1.04.043-.086.096-.165.158-.236.052-.06.1-.115.146-.177.09-.12.17-.25.235-.385.065-.14.12-.282.168-.427.028-.085.062-.167.1-.248.014-.03.032-.058.052-.083.06-.083.165-.12.265-.096.034.01.066.026.094.048.03.025.058.056.08.09.052.082.093.17.125.262.03.08.056.163.08.242.048.16.084.32.11.483.05.33.05.637.114.98.03.348-.036.696-.19 1.01-.067.162-.156.314-.264.453-.112.122-.232.235-.36.34-.24.208-.488.417-.51.644-.005.093-.084.164-.177.158s-.165-.084-.16-.177l.003-.01zM12.917 6.68l-.338-.386c-.116-.127-.224-.26-.328-.396l-.298-.417c-.023-.034-.033-.082-.06-.116l-.077-.102-.154-.208.237-.033c-.052.132-.117.255-.173.382-.057.125-.09.26-.096.398-.028.396.133.783.434 1.042.098.075.208.156.308.25.208.194.49.28.72.58.036.046.046.11.024.165s-.072.095-.13.104c-.06.01-.12-.014-.157-.06l-.02-.028c-.077-.092-.168-.17-.27-.233-.114-.076-.236-.143-.35-.232-.057-.048-.114-.096-.17-.148s-.123-.1-.18-.156c-.114-.11-.21-.24-.286-.38-.15-.283-.213-.605-.18-.924.017-.304.087-.602.21-.88l.018-.036c.023-.05.066-.086.118-.102s.108-.01.155.018c.027.015.05.037.07.063.095.142.14.325.28.43.1.14.173.3.283.43.052.067.13.115.188.18l.167.195c.11.13.223.26.325.396.048.072.033.168-.034.222s-.164.048-.224-.013h-.012z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M15.573 7.5c.102-.143.25-.248.417-.3.144-.044.292-.074.442-.09.256-.015.51-.055.758-.117.052-.018.103-.042.15-.07.046-.032.092-.066.146-.095.087-.085.157-.185.208-.296.113-.236.198-.484.252-.74l.156.073c-.254.207-.554.35-.875.417-.295.072-.587.16-.873.263-.127.052-.246.122-.352.208-.12.088-.246.175-.358.273-.11.1-.206.21-.29.33-.08.096-.128.213-.14.336 0 .06-.032.115-.083.144s-.114.03-.166 0c-.052-.03-.083-.085-.083-.144v-.02c.02-.19.09-.37.21-.52.095-.135.202-.26.32-.377.118-.11.245-.21.38-.296.145-.102.304-.18.472-.232.302-.096.608-.174.92-.235.286-.073.584-.154.734-.346.048-.06.13-.084.202-.058s.12.094.12.17v.034c.005.3-.077.595-.234.85-.088.13-.187.253-.296.367-.045.067-.105.122-.175.16-.065.04-.135.072-.208.095-.143.038-.29.07-.435.092-.136.04-.276.065-.417.077-.267.027-.52.088-.625.235-.054.07-.153.085-.226.035s-.095-.148-.05-.224v-.003z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M17.125 7.898c.26-.024.51-.117.72-.27.11-.07.21-.153.303-.245.106-.082.187-.194.23-.32l.16.19c-.1.02-.2.03-.3.032h-.303c-.208 0-.398.023-.598.025h-.027c-.142-.027-.29-.027-.43 0-.146.027-.286.075-.418.142-.15.047-.295.11-.43.19-.063.04-.122.085-.178.133-.025.02-.047.044-.067.07-.017.02-.017.045 0 .018-.003.06-.04.116-.095.142s-.12.02-.17-.017c-.05-.037-.075-.098-.066-.16.01-.076.042-.15.094-.207.033-.037.068-.073.106-.105.066-.058.136-.11.208-.16.07-.048.144-.09.22-.127.078-.033.16-.058.236-.085.164-.074.338-.123.517-.144.184-.02.37-.006.55.04h-.044c.19.008.383 0 .573-.026.094-.015.185-.04.277-.058s.185-.03.28-.03h.068c.048-.002.094.017.128.05s.053.08.053.126c0 .032-.008.062-.024.09-.088.15-.208.263-.29.417-.12.107-.247.206-.38.295-.06.056-.124.106-.19.152-.073.038-.148.07-.224.1-.155.06-.32.088-.485.088-.092 0-.167-.075-.167-.167s.075-.167.167-.167l-.002-.01zM11.017 7.617c-.144-.12-.263-.267-.348-.433-.083-.17-.117-.36-.1-.55.013-.104.105-.18.21-.17h.032c.044.012.07.066.117.078l.128.05c.088.03.175.054.263.092.088.042.18.072.276.09l.29.042c.012.002.024.007.033.015l.016.013c.19.15.398.285.596.417.084.083.177.157.277.22.093.053.196.085.303.095.095-.003.175.07.178.166s-.07.176-.165.18h-.067c-.146-.023-.286-.07-.417-.14-.06-.027-.117-.062-.17-.103-.05-.044-.094-.094-.144-.135-.208-.156-.392-.323-.585-.496l.082.044-.28-.05c-.093-.015-.193-.013-.295-.02-.103-.012-.203-.048-.29-.105-.044-.03-.088-.058-.133-.083s-.102-.015-.142-.052l.208-.142c-.015.068-.02.14-.015.208 0 .077.07.13.102.194.07.126.162.24.27.335.067.063.07.166.01.233s-.166.073-.234.013h-.008zM13.396 5.12s0-.01 0 0-.013.037-.013.03c-.017-.034-.038-.065-.063-.094-.078-.09-.16-.174-.246-.254-.092-.09-.18-.187-.263-.288-.1-.12-.172-.263-.207-.417l.33.067c-.03.047-.064.09-.1.133-.042.04-.076.086-.1.138-.053.1-.102.2-.145.304l-.14.31c-.046.104-.078.215-.096.328l-.012-.063c.26.37.548.723.82 1.085l-.295.073c.003-.114.02-.228.05-.337.03-.112.07-.22.102-.333.03-.116.064-.23.106-.342.048-.14.144-.263.27-.343zm.146.297c-.053.05-.093.11-.117.18-.038.095-.07.194-.092.295-.024.103-.053.206-.088.306-.033.103-.053.21-.06.317-.008.067-.056.122-.12.138s-.135-.01-.174-.063l-.766-1.12c-.025-.038-.035-.082-.027-.126.02-.248.076-.49.167-.723.06-.11.13-.216.208-.314.04-.047.07-.1.092-.158.027-.055.062-.106.102-.152l.02-.03c.033-.05.097-.072.155-.052s.097.076.093.137c.012.105.056.202.125.28.073.094.192.152.275.244.095.09.185.188.27.29.054.066.094.143.118.225.018.07.01.144-.026.207-.038.054-.09.097-.152.12zM16.498 6.117c-.248.11-.373.16-.527.21-.014.004-.03.01-.045.013-.258.078-.154.463.108.402.04-.01.078-.02.113-.035.22-.088.318-.27.426-.623.004-.012.008-.025.01-.038l.005-.014.028-.093c.06-.234.088-.466.088-.698 0-.085-.004-.17-.012-.254-.008-.097-.083-.172-.175-.186-.017-.003-.034-.003-.052 0-.115.01-.198.112-.188.226.026.267.005.537-.06.798-.007.017-.014.04-.028.088l-.004.014c-.078.26-.128.36-.212.397-.01.005-.02.008-.032.01l.108.403c.035-.01.068-.02.1-.032.15-.05.284-.105.52-.21.273-.12.398-.17.574-.223.124-.027.255-.09.367-.178.22-.2.252-.442.21-.83l-.06-.537c-.013-.13-.143-.215-.268-.177-.18.057-.352.133-.513.23-.096.055-.214.065-.32.024-.048-.018-.097-.018-.142-.003-.057.02-.105.064-.128.124-.04.107.013.228.12.27.064.023.13.04.196.047.166.02.336-.015.484-.1.06-.036.122-.07.185-.098l.03.27c.028.26.01.398-.066.466-.05.04-.125.075-.203.092-.193.058-.324.108-.562.213l-.073.032z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        opacity: ".4",
                        d:
                          "M15.242 4.47c-.124.16-.225.34-.298.53-.064.26-.096.526-.094.794-.052.698-.32 1.358-.583 2.006.344-.263.285.244.43-.165.074-.208.505-1.227.514-1.458l.076-1.78M16.708 5.044c.006.248.07.492.19.71.013.03.033.054.058.073.027.013.057.02.088.023.1.016.196.06.273.127-.326.034-.643.126-.935.273l.208-1.015c.01-.054.03-.12.085-.133M12.263 5.09l.57.417c.014.012.03.02.05.02.028 0 .043-.037.05-.066.07-.22.218-.41.418-.53.013-.01.03-.013.045-.01.025 0 .03.04.027.067-.067.488-.226.958-.47 1.385l-.474-.733c-.1-.142-.182-.296-.242-.46"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M21.498 16.848c-.062.08-.152.134-.252.15-.077.01-.156.004-.23-.015-.055-.013-.11-.022-.163-.03l-.175-.018-.696-.077c-.465-.052-.925-.12-1.394-.148-.233-.02-.467-.027-.7-.058l-.696-.094c-.462-.067-.93-.094-1.398-.133-.93-.08-1.875-.133-2.798-.235l-1.394-.17-1.394-.11c-.93-.103-1.856-.236-2.788-.336l-.348-.037c-.11-.012-.22-.015-.338-.017s-.237 0-.362-.017c-.062 0-.127-.017-.188-.03-.072-.008-.142-.026-.208-.053-.05-.024-.094-.062-.125-.108-.024-.038-.043-.08-.055-.123-.02-.075-.03-.152-.023-.228 0-.135.033-.254.05-.362s.02-.227.03-.338c.01-.11.026-.233.047-.348.04-.23.078-.462.105-.694s.015-.47.042-.702l.15-1.396c.104-.93.208-1.86.3-2.792.042-.467.094-.93.17-1.394.076-.462.128-.928.153-1.396.015-.47.088-.93.146-1.396s.127-.927.175-1.394l.066-.698.03-.352c-.006-.135.035-.267.116-.375.056-.053.13-.083.208-.083.064 0 .127.006.19.017.115.02.225.028.344.04l2.094.22 1.394.156c.93.094 1.875.138 2.798.22s1.875.155 2.796.255l1.394.172c.465.058.93.08 1.398.123s.93.07 1.396.094c.472.027.94.082 1.406.166l.108.02.025.105c.058.305.063.616.015.922-.02.148-.035.283-.048.427l-.04.434-.12.873-.064.43-.042.434c-.03.29-.048.58-.08.87l-.116.865c-.027.29-.033.58-.054.87s-.065.58-.1.868c-.035.288-.08.577-.11.867s-.073.577-.09.87l-.07.87c-.028.29-.072.577-.105.867-.082.577-.11 1.158-.15 1.74-.018.292-.05.58-.076.87-.013.14-.03.3-.038.416v.23c-.01.11-.05.213-.12.3zm-.263-.208c.04-.104.056-.216.046-.327.01-.165.03-.296.045-.444.033-.29.056-.58.096-.868.074-.577.157-1.154.184-1.735.023-.29.033-.58.063-.87l.106-.868c.042-.288.056-.58.083-.87s.044-.58.06-.87c.017-.29.038-.582.075-.87s.114-.573.14-.862c.028-.29.028-.58.06-.87s.074-.578.116-.866c.094-.575.087-1.16.144-1.74l.052-.433c.017-.147.042-.3.065-.44.058-.265.07-.54.035-.81l.125.118c-.456-.07-.92-.08-1.385-.13s-.935-.097-1.398-.15c-.462-.055-.93-.118-1.396-.153s-.935-.044-1.402-.085c-.93-.085-1.863-.18-2.792-.294s-1.854-.275-2.785-.36c-.468-.044-.934-.07-1.4-.104s-.934-.075-1.4-.12L7.9 1.54c-.062 0-.127-.015-.183-.025-.047-.01-.095-.016-.144-.02h-.043c-.018.023-.03.05-.035.078-.01.052-.02.104-.025.156l-.052.353c-.035.232-.064.464-.088.696-.115.928-.03 1.874-.235 2.797-.097.46-.142.927-.135 1.396-.01.47-.05.936-.115 1.4-.12.93-.208 1.858-.313 2.79l-.153 1.396c-.025.232-.09.46-.113.693s-.033.467-.046.7c0 .117-.02.233-.027.35s-.024.223-.05.358c-.024.136-.05.232-.066.332-.008.042-.008.085 0 .127.012.047.012.05.027.06.044.02.09.034.136.043.053.012.106.02.16.027.108.012.223.015.34.02s.24 0 .36.02l.348.04c.93.102 1.863.185 2.792.28.465.054.93.104 1.396.15l1.4.103c.467.03.93.102 1.396.148l1.394.16c.465.055.93.116 1.396.14l.7.05c.233.014.465.05.698.078.463.065.93.087 1.4.13l.7.062.175.017c.064 0 .134.02.184.03.04.005.078.005.117 0 .028-.01.022-.01.045-.032v-.004z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M18.215 16.52l-9.302-.95c-.08-.953.152-2 .246-2.916.084-.833.107-1.7.24-2.52.076-.44.095-.89.13-1.337.015-.208-.07-.883.094-1.042s.938.02 1.188.048l6.715.683c.288.027.577.06.867.088.152.015.515-.065.625.07.064.09.028.328.026.43 0 .23-.027.47-.052.704l-.48 4.662c-.017.44-.066.876-.145 1.308-.06.242-.095.515-.153.77z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#f2f4f9",
                        d:
                          "M18.215 16.52l-3.063-.312c.166-.444.37-.872.61-1.28.1-.178.208-.35.33-.52.328-.494.678-.98.832-1.563.064-.25.11-.505.135-.762.055-.606.07-1.215.04-1.823 0-.144 0-.29-.01-.44-.017-.46.037-.922.16-1.367l.278.03c.287.026.577.06.867.087.152.015.515-.065.625.07.065.09.03.328.027.43 0 .23-.027.47-.052.704l-.483 4.667c-.018.44-.067.877-.146 1.31-.06.24-.094.514-.152.77z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#ebedf5",
                        d:
                          "M9.938 15.706c.017-.08-.088-.133-.03-.22 0-.01-.022-.016-.022-.024s.02-.012.02-.02c0-.005-.024 0-.018-.01s0-.04 0-.055c0-.017.054-.048 0-.056 0 0 .015-.02.02-.03s0-.02-.01-.027c-.006-.018-.006-.038 0-.056.01-.02-.034-.03-.043-.048s-.033-.032 0-.057-.042-.03-.037-.05 0-.02 0-.027c0-.008 0-.02.017-.03s.013-.04-.017-.055c0-.01.02-.02.015-.03s-.025-.015-.013-.027c.013-.012 0-.02-.015-.025-.008-.006-.014-.015-.017-.025l.165-.023c.004.01.004.018 0 .027 0 .01-.017.02 0 .027s0 .02 0 .027c0 .01.02.018.033.024-.033.023 0 .035-.02.058s.018 0 .022 0 0 0 0 .015-.02.02 0 .027c.02.006-.027.042 0 .056s.037.03.033.05c0 .012-.008.024-.018.03-.017.013-.02.024 0 .03s.042.03.035.05c-.006.02-.027.023-.012.03s.048 0 .046.02c0 .02-.026.015-.032.02s0 0 .02 0c.022 0 .024.016.02.026s0 .037 0 .056c0 .02-.023.015-.02.02s.02 0 .02 0-.023.022-.02.032c-.002.038.012.075.036.104 0 .02-.033.046 0 .054 0 .02.017.033.023.05l-.18.065zM11.965 8.292c.01.154.033.308.07.458.01.16.04.32.093.47.02.08.026.162.02.243-.002.082.005.163.02.244 0 .167-.046.323-.063.483-.02.08 0 .163-.025.242 0 .04-.035.075-.046.115s0 .083-.012.12c-.037.157-.094.307-.137.46s-.152.286-.154.453c-.022.075-.064.146-.095.22-.026.074-.047.15-.063.228-.04.152-.08.306-.127.458-.036.155-.06.312-.073.47-.015.16-.047.315-.096.466-.037.154-.025.317-.054.47-.024.077-.036.155-.035.234-.005.086-.023.17-.054.25-.027.156-.043.313-.048.47-.02.076-.033.153-.042.23.01.08.01.16 0 .238-.013.08-.013.16 0 .237.005.08.005.158 0 .236h-.167c-.004-.08-.004-.16 0-.24.015-.08.015-.16 0-.24-.007-.08 0-.16.02-.24.004-.08.004-.16 0-.242.053-.154.032-.32.082-.473v-.12c.002-.04.01-.08.02-.12.027-.076.042-.156.045-.236.02-.158.083-.308.096-.47.01-.24.062-.475.153-.697.037-.072.06-.15.065-.23.017-.16.05-.32.102-.472.038-.07.066-.147.083-.225.005-.08.016-.16.033-.24.012-.037.052-.067.07-.102.016-.038.022-.078.02-.12.002-.08.022-.157.058-.228.058-.146.096-.3.14-.45 0-.04.04-.07.046-.11s0-.08 0-.12c.015-.076.054-.15.063-.226.054-.308.05-.624-.01-.93l-.023-.236c-.005-.08-.022-.157-.052-.23-.017-.16-.063-.314-.088-.474l.167-.023zM13.8 8.642c-.025 0-.044.02-.027 0 .014-.01.03-.02.048-.02.024-.004.047.003.066.018.008.007.015.016.02.025.008.012.013.026.016.04v.025l-.01.025c-.118.29-.193.596-.225.908-.018.078-.043.154-.075.227-.027.075-.02.16-.052.233-.056.15-.125.294-.175.446-.096.304-.215.6-.356.89-.027.073-.065.144-.11.207-.055.063-.05.152-.095.208s-.09.13-.13.208c-.04.077-.068.144-.1.208-.074.14-.145.28-.228.418s-.12.292-.188.435c-.057.145-.127.285-.21.417-.068.142-.09.302-.15.442-.035.07-.06.144-.072.22-.02.073-.05.143-.085.21-.025.074-.02.153-.054.226s0 .156-.024.23c-.02.077-.032.154-.035.232.008.078.008.156 0 .233s0 .157.02.233c.012.077.023.154.03.233l-.168.014c-.01-.08-.014-.16-.012-.24.013-.08.013-.16 0-.24-.016-.08-.016-.162 0-.242v-.244c0-.08.067-.154.054-.238s.042-.156.06-.233c0-.04 0-.08.012-.12.007-.04.018-.08.033-.118.03-.067.052-.135.068-.205.042-.156.144-.288.194-.438.037-.156.1-.305.183-.442.038-.072.08-.142.127-.208.054-.06.097-.132.127-.208.053-.15.118-.293.193-.432.254-.575.537-1.133.794-1.706.06-.145.11-.294.152-.446.022-.075.05-.148.068-.225.007-.078.02-.156.04-.232.102-.298.152-.608.24-.925v.054c.004.007.01.013.017.02.016.012.036.018.056.016.013 0 .025-.005.034-.012-.025.023-.057.034-.09.032l.02-.162zM15.38 8.796c-.09.13-.165.27-.226.417-.088.133-.153.28-.192.433-.026.074-.06.144-.104.208-.04.07-.068.143-.085.22-.063.145-.152.28-.208.418-.037.07-.037.154-.07.227-.016.036-.05.066-.06.103s0 .08-.028.117c-.054.148-.113.294-.156.446s-.14.29-.124.454c-.015.077-.044.15-.065.227-.01.077-.016.155-.016.233 0 .158 0 .317-.023.475-.002.16.003.318.018.477.013.16.004.32-.027.477-.018.157 0 .32-.014.478-.023.08-.035.16-.037.242-.008.08-.028.16-.06.233-.024.16-.082.31-.1.47-.033.074-.062.15-.086.226-.014.078-.037.155-.07.228-.035.072-.06.15-.074.23-.022.076-.048.152-.08.226l-.153-.067c.027-.07.06-.14.094-.208.043-.068.07-.144.082-.222.014-.078.04-.153.077-.223.018-.077.03-.155.036-.233 0-.08.085-.14.073-.223s.05-.15.055-.228v-.12c.004-.038.01-.076.02-.114.026-.075.038-.154.036-.233.03-.155.048-.312.057-.47-.022-.157-.022-.316 0-.474.005-.078.016-.157.033-.234.023-.077.03-.158.02-.237-.016-.16-.016-.32 0-.478.022-.08.035-.163.04-.246-.008-.082-.008-.164 0-.246 0-.04.047-.073.062-.11.01-.04.01-.082 0-.123 0-.08.016-.162.052-.235.06-.15.1-.304.163-.452 0-.04.05-.067.06-.106s.01-.08.027-.117c.027-.075.083-.14.108-.208.127-.293.246-.59.367-.882l.114-.208c.042-.068.075-.142.096-.22.083-.137.137-.284.208-.43l.162.077zM16.042 8.958c-.07.13-.123.27-.154.417-.058.144-.09.297-.094.452-.01.078-.03.153-.06.225-.026.074-.042.15-.05.23-.042.15-.113.29-.152.44-.03.074-.025.155-.05.228-.01.037-.042.07-.054.106s0 .08-.02.115c-.047.15-.107.295-.155.44-.025.074-.033.138-.06.21-.013.035-.02.073-.02.11s.01.08 0 .118c0 .077-.03.154-.043.23-.01.076-.013.153-.012.23 0 .154-.025.308-.048.463-.013.156-.018.312-.015.468.008.16-.01.32-.054.473-.034.153-.028.314-.07.466-.03.073-.05.15-.058.227-.017.077-.046.15-.088.22-.04.15-.11.29-.14.445-.036.068-.068.137-.096.208-.016.076-.04.15-.073.22-.035.07-.06.145-.07.222-.015.075-.036.15-.06.223l-.157-.05c.02-.074.048-.148.08-.22.038-.068.065-.143.076-.22.016-.074.043-.145.08-.21.022-.075.037-.152.045-.23.084-.133.097-.292.17-.43.01-.036 0-.076.015-.114.007-.038.018-.075.033-.11.034-.07.056-.144.065-.22.047-.147.084-.296.11-.447-.004-.155.01-.31.044-.46.012-.076.028-.152.05-.226.026-.073.037-.15.03-.23-.01-.157-.005-.315.014-.472.024-.074.036-.15.036-.23-.013-.076-.02-.154-.023-.232 0-.04.035-.075.044-.113.008-.04.008-.08 0-.12-.015-.086 0-.173.04-.25.063-.145.102-.29.156-.437 0-.037.046-.067.054-.104s0-.08.02-.115c.02-.074.068-.14.087-.207.092-.295.163-.595.213-.9l.065-.225c.026-.074.04-.15.046-.23.052-.147.083-.303.146-.453l.16.075zM16.817 9.006c.01 0-.01 0-.02.03-.015.02-.027.043-.04.066-.027.048-.05.1-.066.154-.005.057-.024.113-.053.162-.024.053-.04.11-.048.167-.02.115-.03.23-.055.344-.012.055-.042.107-.056.166-.013.057-.02.115-.024.173-.023.114-.063.224-.094.337l-.035.17c0 .057 0 .118-.015.176s-.058.108-.048.17c0 .057-.008.115-.023.172-.02.115-.05.227-.064.344-.113.45-.172.915-.175 1.38-.002.116.012.232.04.344.02.115.04.23.057.344s0 .233.027.348c.027.115.054.23.07.346v.025l-.01.023v-.048c-.022.163.064.315.018.48-.01.08.02.157 0 .24-.007.038-.007.078 0 .118.013.038.018.08.015.12 0 .078-.02.16-.02.24.01.08.01.16 0 .24-.01.078-.01.16 0 .24.007.08.007.16 0 .24l-.166-.01c.003-.08.01-.158.02-.236.017-.078.017-.158 0-.235-.01-.08-.01-.158 0-.236.003-.08 0-.16-.008-.238-.004-.04.003-.08.02-.12.01-.037.01-.077 0-.116-.022-.077.018-.158 0-.235-.064-.152 0-.317-.05-.47v-.014l.013-.03v.046c-.01-.115 0-.233-.02-.348s-.074-.225-.074-.344c-.013-.117-.02-.236-.018-.354.02-.118.02-.238 0-.356-.016-.118-.02-.237-.015-.356 0-.12.06-.23.052-.35-.008-.06-.013-.12-.013-.18-.01-.06.046-.112.058-.168 0-.06-.003-.12-.012-.18.006-.057.018-.115.033-.172.03-.115.042-.23.067-.346.007-.06.023-.116.046-.17.032-.055 0-.118.022-.176.072-.223.127-.452.165-.683.015-.056.028-.113.037-.17 0-.06 0-.12.02-.176.028-.115.066-.225.1-.338.023-.056.04-.113.047-.172.005-.06.02-.118.05-.17.024-.055.036-.116.057-.174.01-.028.024-.055.04-.08.02-.043.054-.077.096-.1l.054.147zM18.402 9.273c-.03.15-.054.302-.07.454-.04.148-.063.3-.064.454-.007.077-.024.153-.052.224-.024.073-.038.148-.042.225-.033.15-.104.29-.14.437-.025.073-.023.152-.044.225-.01.037-.04.067-.052.104s0 .08-.02.112c-.043.146-.097.287-.14.433s-.14.276-.134.434c-.02.073-.06.142-.085.208-.025.072-.043.146-.055.22-.037.15-.073.295-.12.44-.034.15-.058.3-.07.45-.016.152-.05.3-.098.445-.04.146-.027.302-.06.45-.025.072-.038.147-.04.223-.008.076-.028.15-.06.22-.03.15-.05.3-.063.45-.024.073-.043.147-.054.222 0 .076-.006.153-.023.227-.02.073-.028.15-.02.226-.002.076-.007.152-.018.227l-.166-.02c.007-.075.02-.15.035-.224.023-.074.032-.15.026-.228 0-.076.01-.152.033-.225.005-.076.005-.153 0-.23.06-.145.045-.3.097-.447 0-.074.012-.148.035-.22.028-.07.044-.146.046-.222.02-.152.087-.294.102-.446-.002-.154.022-.307.073-.452.02-.07.044-.14.075-.208.035-.068.056-.142.063-.22.015-.15.045-.3.09-.447.036-.065.06-.136.076-.208.002-.086.012-.17.03-.254.013-.035.05-.065.068-.1.013-.037.017-.076.013-.115-.002-.077.016-.154.052-.223.055-.142.09-.29.14-.433 0-.037.045-.067.053-.104s0-.077.017-.115c.02-.073.07-.137.083-.208.048-.144.08-.292.115-.44.024-.072.04-.146.048-.22 0-.077.01-.153.03-.226.052-.144.08-.295.082-.447.026-.15.04-.3.046-.45l.156.02zM11.967 15.898c.015-.54.027-1.096.254-1.594.028-.063.022-.133.047-.198.01-.03.042-.056.054-.088s0-.07.024-.1c.05-.125.115-.244.17-.367s.176-.207.21-.35c.04-.054.09-.104.143-.147.05-.053.105-.1.167-.135.04-.02.09-.02.13 0 .035.022.063.055.078.094.028.066.043.137.044.208 0 .135.04.27.035.406.01.135-.004.27-.043.4-.027.13 0 .27-.033.402-.023.063-.035.13-.035.198-.01.067-.03.132-.06.192-.032.128-.055.26-.072.39-.026.062-.047.126-.063.192-.004.067-.016.133-.037.196-.025.063-.037.13-.035.198-.005.07-.016.14-.03.208l-.16-.042c.01-.065.027-.13.047-.192.03-.06.043-.127.042-.194.003-.067.02-.133.046-.194.012-.07.018-.14.017-.208.065-.12.056-.258.11-.383-.004-.068.003-.135.023-.2.027-.06.04-.126.042-.193.032-.128.057-.258.073-.39-.014-.13-.008-.264.017-.394.006-.065.016-.13.03-.194.02-.063.02-.13 0-.193-.013-.057-.034-.112-.062-.165-.012-.02-.025-.035-.03-.035h-.026c-.056.007-.106.04-.135.088-.035.052-.044.123-.08.173s-.06.037-.082.063c-.02.028-.032.06-.033.095-.01.066-.036.127-.077.18-.064.113-.12.232-.17.353 0 .03-.047.052-.055.085s0 .067-.02.098c-.02.064-.068.118-.082.18-.087.25-.142.508-.165.77-.042.126-.06.26-.048.39-.016.13-.016.26 0 .39l-.165.007zM17.373 9.167c-.058.122-.1.25-.13.38-.054.127-.085.262-.09.4-.007.067-.025.133-.053.195-.024.067-.036.137-.035.208-.03.133-.087.258-.113.394-.02.065 0 .137-.023.208 0 .033-.034.063-.04.096s0 .07 0 .102c-.024.133-.06.267-.076.4s-.094.263-.052.402c0 .067-.025.133-.03.208-.004.063.01.126.04.18.016.026.014.016.034.013.025-.014.047-.03.067-.052.044-.047.08-.1.125-.153.072-.113.122-.24.148-.37.028-.133.067-.262.12-.386.043-.128.028-.272.066-.4.027-.067.042-.138.044-.21.01-.068.03-.134.065-.195.036-.132.064-.266.082-.402.027-.063.05-.13.065-.196.004-.07.017-.14.04-.208.026-.067.04-.138.038-.21.007-.07.02-.14.035-.207l.163.037c-.013.07-.03.14-.052.208-.03.065-.045.136-.043.208-.008.064-.027.126-.056.183-.01.068-.017.138-.016.207-.067.125-.058.267-.117.394.003.072-.007.142-.03.21-.03.064-.047.135-.05.207-.022.135-.09.26-.107.398 0 .145-.034.287-.098.417-.027.066-.062.13-.106.185-.048.053-.087.113-.115.18-.03.065-.067.128-.112.187-.03.035-.065.064-.106.085-.036.013-.076.013-.112 0-.02-.01-.038-.02-.054-.036l-.017-.054c-.018-.08-.03-.16-.032-.24-.02-.068-.032-.138-.035-.208 0-.035.035-.07.044-.102.01-.035.01-.07 0-.106-.016-.07-.012-.142.012-.208.03-.135.047-.27.078-.406 0-.035.035-.063.04-.098s0-.07 0-.104c.013-.067.052-.13.063-.198.064-.267.122-.533.168-.806.054-.127.09-.26.108-.398.052-.13.07-.267.117-.4l.144.06z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M18.166 16.23c.005-.026.01-.05.018-.103.035-.197.054-.294.08-.396.078-.427.126-.86.145-1.3l.478-4.662.005-.05.013-.127c.022-.218.033-.368.033-.518 0-.023 0-.017.005-.103.003-.045.005-.075.005-.106.002-.084-.006-.142-.015-.154-.024-.03-.107-.046-.247-.042-.03 0-.06.002-.107.005-.12.007-.153.008-.2.004-.12-.01-.222-.022-.434-.044l-.433-.044-.28-.03-6.435-.654c-.037-.004-.084-.01-.156-.023-.01 0-.154-.025-.2-.033-.08-.013-.15-.023-.216-.032-.29-.037-.49-.032-.532.01-.045.044-.07.21-.07.46 0 .068 0 .132.004.235.006.185.007.225.003.28l-.02.307c-.038.52-.06.752-.11 1.04-.065.406-.103.787-.154 1.473l-.01.124c-.033.457-.05.663-.076.916-.024.232-.043.38-.113.88-.053.375-.08.585-.104.817-.043.424-.057.784-.035 1.114l2.508.254.536.06 6.078.618c.01-.052.02-.11.034-.177zm.038.394l-9.388-.96-.007-.085c-.032-.37-.02-.767.028-1.24.024-.235.05-.447.105-.825.07-.498.09-.643.112-.872.026-.25.042-.455.076-.91l.01-.124c.052-.693.09-1.078.157-1.493.047-.28.07-.507.105-1.02.01-.155.016-.222.023-.307.003-.043.002-.085-.004-.258-.003-.105-.004-.17-.004-.24 0-.315.03-.51.134-.61.11-.11.335-.116.704-.068l.222.032c.047.008.192.03.2.033.07.01.113.017.145.02l6.715.683c.12.01.21.02.434.044l.432.044c.03.004.063.003.168-.003l.114-.005c.203-.006.333.02.417.122.05.066.063.156.06.286 0 .034-.003.067-.006.114l-.005.09c0 .157-.012.314-.035.54l-.013.126-.005.05-.48 4.656c-.018.444-.067.886-.148 1.33-.027.102-.045.195-.08.388l-.018.104c-.02.112-.037.195-.055.276l-.02.09-.092-.01z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M10.402 10.98c-.068 0-.13-.04-.158-.1-.02-.036-.035-.073-.046-.11-.02-.07-.037-.14-.048-.21-.023-.133-.036-.27-.04-.405-.006-.134 0-.27.012-.402v-.4c0-.133.027-.267.03-.4V7.757c-.003-.01-.003-.018 0-.027.067-.13.174-.237.305-.304.07-.036.145-.053.223-.05.04.003.08.01.117.023l.108.057c.03.024.04.066.022.1s-.057.053-.095.042l-.033-.016-.06-.03c-.024-.008-.048-.012-.072-.013-.048 0-.095.01-.137.034-.045.025-.087.057-.122.096-.04.038-.073.08-.1.13v-.03c-.02.265-.025.53-.033.796v.398l.012.398c0 .133-.025.265-.033.398.008.07.008.14 0 .208v.208c0 .066.01.132.025.196.014.065.018.13.028.194.01.062.022.123.04.183.007.025.017.05.03.074 0 .025.022.015 0 .017.03-.006.063.005.083.03s.025.06.01.088c-.013.03-.042.047-.074.047l.006-.025z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#fff",
                        d:
                          "M11.34 10.44l.267 1.096s.015.48 0 .72c-.023.222-.058.444-.104.664-.208 1.065-.042.752-.248 1.817-.894-.257-1.78-.544-2.654-.862.092-.954.32-1.89.678-2.78 0 0 .346-.597.583-.984l1.48.332z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M9.91 10.226l-.143.238c-.01.014-.01.014-.017.03-.085.142-.175.295-.264.448-.03.054-.06.103-.086.148l-.026.043c-.344.855-.567 1.753-.662 2.67.812.293 1.633.56 2.462.8.067-.357.086-.527.1-.78.015-.287.04-.475.127-.926.047-.216.08-.434.103-.65.004-.07.006-.168.006-.286 0-.09-.002-.19-.004-.29 0-.052-.002-.094-.003-.12l-.25-1.023-1.342-.3zm1.53.19l.268 1.095.003.022c.002.027.003.074.004.134l.003.295c0 .123-.002.224-.007.304-.023.227-.06.452-.106.674-.086.44-.108.62-.123.894-.015.288-.037.476-.124.923-.012.06-.072.097-.13.08-.898-.258-1.785-.546-2.662-.865-.045-.016-.073-.06-.068-.108.092-.964.322-1.91.69-2.82l.034-.057.086-.148.265-.45.018-.03.183-.303c.024-.038.07-.057.113-.047l1.48.33c.038.01.068.04.077.078z"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", {
                      attrs: {
                        fill: "#d6dbeb",
                        d:
                          "M11.13 12.33c-.28.078-.574.087-.857.026-.15-.045-.282-.136-.38-.258-.05-.062-.086-.133-.11-.208-.01-.04-.017-.08-.016-.12-.004-.06.017-.115.056-.157.04-.033.093-.05.146-.046.042 0 .084.008.124.023.075.03.142.076.194.137.096.117.144.266.135.417-.01.306-.223.568-.52.638l.016-.104c.084.043.164.093.24.15.08.06.15.13.21.208.038.055.05.124.036.19-.015.062-.05.116-.1.156-.09.066-.2.097-.313.085l.07-.127.124.208c.042.073.083.14.13.208.053.086.074.19.057.29-.014.055-.042.105-.083.144-.046.046-.11.07-.176.065-.046-.005-.08-.046-.075-.092s.045-.08.09-.075c.026 0 .07-.033.08-.085.006-.06-.01-.12-.044-.17l-.127-.21c-.047-.068-.082-.143-.124-.207-.014-.026-.013-.058.003-.084s.043-.04.073-.04c.072.012.146-.004.208-.043.023-.018.04-.043.047-.07.005-.023 0-.048-.015-.067-.052-.064-.11-.12-.177-.17-.065-.054-.135-.1-.208-.143-.03-.017-.048-.053-.043-.088s.033-.063.068-.07c.238-.044.407-.256.398-.498-.006-.112-.046-.22-.115-.308-.032-.042-.073-.077-.12-.1-.023-.01-.047-.018-.072-.02-.016-.002-.032-.002-.048 0v.034s0 .056.015.083c.015.058.04.113.077.16.037.05.082.093.133.13.055.03.114.054.175.068.258.047.522.036.775-.03.03-.01.063 0 .085.022s.03.056.018.086c-.01.03-.038.05-.07.054l.005.006z"
                      }
                    })
                  ]
                )
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "text-center" }, [
            _c(
              "span",
              {
                staticClass: "btn btn-primary",
                on: { click: _vm.openUploader }
              },
              [_vm._v("Upload image")]
            )
          ])
        ]
      ),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "attach-demo",
          attrs: { title: "Change file" },
          on: { click: _vm.openUploader }
        },
        [
          _c("img", {
            directives: [
              {
                name: "show",
                rawName: "v-show",
                value: _vm.value,
                expression: "value"
              }
            ],
            staticClass: "image-responsive",
            attrs: { src: _vm.bookingCore.url + "/media/preview/" + _vm.value }
          })
        ]
      ),
      _vm._v(" "),
      _c(
        "div",
        {
          directives: [
            {
              name: "show",
              rawName: "v-show",
              value: _vm.value,
              expression: "value"
            }
          ],
          staticClass: "upload-actions justify-content-between"
        },
        [
          _c(
            "a",
            {
              attrs: { href: "#" },
              on: {
                click: function($event) {
                  _vm.value = ""
                }
              }
            },
            [_vm._v("Remove")]
          )
        ]
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/admin/js/_base.js":
/*!*************************************!*\
  !*** ./resources/admin/js/_base.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  $('.main-menu .has-children .btn-toggle').click(function () {
    var p = $(this).closest('.has-children');

    if (p.hasClass('active')) {
      p.removeClass('active');
    } else {
      p.siblings().removeClass('active');
      p.addClass('active');
    }
  });
  $('.btn-toggle-admin-menu,.backdrop-sidebar-mobile').click(function () {
    $('body').toggleClass('sidebar-toggled');
  });
})(jQuery);

/***/ }),

/***/ "./resources/admin/js/_condition.js":
/*!******************************************!*\
  !*** ./resources/admin/js/_condition.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(function ($) {
  $(document).ready(function () {
    var condition_object = 'select, input[type="radio"]:checked, input[type="text"], input[type="hidden"], input.ot-numeric-slider-hidden-input,input[type="checkbox"]'; // condition function to show and hide sections

    $('.main-content').on('change.conditionals', condition_object, function (e) {
      run_condition_engine();
    });
    run_condition_engine();

    function run_condition_engine() {
      $('[data-condition]').each(function () {
        var passed;
        var conditions = get_match_condition($(this).data('condition'));
        var operator = ($(this).data('operator') || 'and').toLowerCase();
        $.each(conditions, function (index, condition) {
          var target = $('[name=' + condition.check + ']');
          var targetEl = !!target.length && target.first();

          if (!target.length || !targetEl.length && condition.value.toString() != '') {
            return;
          }

          var v1 = targetEl.length ? targetEl.val().toString() : '';
          var v2 = condition.value.toString();
          var result;

          if (targetEl.length && targetEl.attr('type') == 'radio') {
            v1 = $('[name=' + condition.check + ']:checked').val();
          }

          if (targetEl.length && targetEl.attr('type') == 'checkbox') {
            v1 = targetEl.is(':checked') ? v1 : '';
          }

          switch (condition.rule) {
            case 'less_than':
              result = parseInt(v1) < parseInt(v2);
              break;

            case 'less_than_or_equal_to':
              result = parseInt(v1) <= parseInt(v2);
              break;

            case 'greater_than':
              result = parseInt(v1) > parseInt(v2);
              break;

            case 'greater_than_or_equal_to':
              result = parseInt(v1) >= parseInt(v2);
              break;

            case 'contains':
              result = v1.indexOf(v2) !== -1 ? true : false;
              break;

            case 'is':
              result = v1 == v2;
              break;

            case 'not':
              result = v1 != v2;
              break;
          }

          if ('undefined' == typeof passed) {
            passed = result;
          }

          switch (operator) {
            case 'or':
              passed = passed || result;
              break;

            case 'and':
            default:
              passed = passed && result;
              break;
          }
        });

        if (passed) {
          $(this).show();
        } else {
          $(this).hide();
        }

        passed = undefined;
      });
    }

    function get_match_condition(condition) {
      var match;
      var regex = /(.+?):(is|not|contains|less_than|less_than_or_equal_to|greater_than|greater_than_or_equal_to)\((.*?)\),?/g;
      var conditions = [];

      while (match = regex.exec(condition)) {
        conditions.push({
          'check': match[1],
          'rule': match[2],
          'value': match[3] || ''
        });
      }

      return conditions;
    } // Please do not edit condition section if you don't understand what it is

  });
});

/***/ }),

/***/ "./resources/admin/js/_form.js":
/*!*************************************!*\
  !*** ./resources/admin/js/_form.js ***!
  \*************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ckeditor_uploadAdapter__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ckeditor/uploadAdapter */ "./resources/admin/js/ckeditor/uploadAdapter.js");


(function ($) {
  function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;

    for (var i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    return result;
  } // Form Configs


  $('.has-ckeditor').each(function () {
    var els = $(this); // ClassicEditor
    //     .create( els[0],{
    //         extraPlugins: [ FindHouseAdaterPlugin ],
    //     })
    //     .catch( error => {
    //         console.error( error );
    //     } );

    var id = $(this).attr('id');

    if (!id) {
      id = makeid(10);
      $(this).attr('id', id);
    }

    var h = els.data('height');
    if (!h && typeof h == 'undefined') h = 300;
    var remove_script_host = true;

    if ($(this).attr("data-fullurl") === "true") {
      remove_script_host = false;
    } // CKEDITOR.replace( id );


    tinymce.init({
      selector: '#' + id,
      plugins: 'preview searchreplace autolink code fullscreen image link media codesample table charmap hr toc advlist lists wordcount imagetools textpattern help pagebreak hr',
      toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | pagebreak codesample code | removeformat',
      image_advtab: true,
      image_caption: true,
      toolbar_drawer: 'sliding',
      relative_urls: false,
      remove_script_host: remove_script_host,
      height: h,
      file_picker_callback: function file_picker_callback(callback, value, meta) {
        /* Provide file and text for the link dialog */
        if (meta.filetype === 'file') {
          uploaderModal.show({
            multiple: false,
            file_type: 'video',
            onSelect: function onSelect(files) {
              if (files.length) callback(bookingCore.url + '/media/preview/' + files[0].id);
            }
          });
        }
        /* Provide image and alt text for the image dialog */


        if (meta.filetype === 'image') {
          uploaderModal.show({
            multiple: false,
            file_type: 'image',
            onSelect: function onSelect(files) {
              console.log(files);
              if (files.length) callback(files[0].full_size);
            }
          });
        }
        /* Provide alternative source and posted for the media dialog */


        if (meta.filetype === 'media') {
          uploaderModal.show({
            multiple: false,
            file_type: 'video',
            onSelect: function onSelect(files) {
              if (files.length) callback(bookingCore.url + '/media/preview/' + files[0].id);
            }
          });
        }
      }
    });
  });
  $(document).on('click', '.dungdt-upload-box-normal .btn-field-upload,.dungdt-upload-box-normal .attach-demo', function () {
    var p = $(this).closest('.dungdt-upload-box');
    uploaderModal.show({
      multiple: false,
      file_type: 'image',
      onSelect: function onSelect(files) {
        p.addClass('active');
        p.find('.attach-demo').html('<img src="' + files[0].thumb_size + '"/>');
        p.find('input').val(files[0].id);
      }
    });
  });
  $(document).on('click', '.dungdt-upload-box-normal .delete', function (e) {
    e.preventDefault();
    var p = $(this).closest('.dungdt-upload-box');
    p.find("input").attr('value', '');
    p.removeClass("active");
  });
  $('.dungdt-upload-multiple').find('.btn-field-upload').click(function () {
    var p = $(this).closest('.dungdt-upload-multiple');
    uploaderModal.show({
      multiple: true,
      file_type: 'image',
      onSelect: function onSelect(files) {
        console.log(files);

        if (typeof files != 'undefined' && files.length) {
          var ids = [];
          var html = '';
          p.addClass('active');

          for (var i = 0; i < files.length; i++) {
            ids.push(files[i].id);
            html += '<div class="image-item"><div class="inner"><span class="delete btn btn-sm btn-danger"><i class="fa fa-trash"></i></span><img src="' + files[i].thumb_size + '"/></div></div>';
          }

          p.find('.attach-demo').append(html);
          var old = p.find('input').val().split(',');
          p.find('input').val(ids.concat(old).join(','));
        }
      }
    });
  });
  $('.dungdt-upload-multiple').on('click', '.image-item .delete', function () {
    var i = $(this).closest('.image-item').index();
    var p = $(this).closest('.dungdt-upload-multiple');
    var ids = p.find('input').val().split(',');
    ids.splice(i, 1);
    p.find('input').val(ids.join(','));
    $(this).closest('.image-item').remove();
  });
  $('.open-edit-input').click(function () {
    $(this).replaceWith('<input type="text" name="' + $(this).data('name') + '" value="' + $(this).html() + '">');
  });
  $(document).ready(function () {
    $('.dungdt-select2-field').each(function () {
      var configs = $(this).data('options');
      $(this).select2(configs);
    });
  });
  $(".form-group-item").each(function () {
    var container = $(this);
    $(this).on('click', '.btn-remove-item', function () {
      $(this).closest(".item").remove();
    });
    $(this).on('press', 'input,select', function () {
      var value = $(this).val();
      $(this).attr("value", value);
    });
  });
  $(".form-group-item .btn-add-item").click(function () {
    var p = $(this).closest(".form-group-item").find(".g-items");
    var number = $(this).closest(".form-group-item").find(".g-items .item:last-child").data("number");
    if (number === undefined) number = 0;else number++;
    var extra_html = $(this).closest(".form-group-item").find(".g-more").html();
    extra_html = extra_html.replace(/__name__=/gi, "name=");
    extra_html = extra_html.replace(/__number__/gi, number);
    p.append(extra_html);

    if (extra_html.indexOf('dungdt-select2-field-lazy') > 0) {
      p.find('.dungdt-select2-field-lazy').each(function () {
        var configs = $(this).data('options');
        $(this).select2(configs);
      });
    }
  });
  $('table .check-all').change(function () {
    if ($(this).is(':checked')) {
      $(this).closest('table').find('tbody .check-item').prop('checked', true);
    } else {
      $(this).closest('table').find('tbody .check-item').prop('checked', false);
    }
  });
  $('.dungdt-apply-form-btn').click(function (e) {
    var $this = $(this);
    var action = $this.closest('form').find('[name=action]').val();

    var apply_action = function apply_action() {
      var ids = '';
      $(".bravo-form-item .check-item").each(function () {
        if ($(this).is(":checked")) {
          ids += '<input type="hidden" name="ids[]" value="' + $(this).val() + '">';
        }
      });
      $this.closest('form').append(ids).submit();
    };

    if (action === 'delete') {
      bookingCoreApp.showConfirm({
        message: i18n.confirm_delete,
        callback: function callback(result) {
          if (result) {
            apply_action();
          }
        }
      });
    } else {
      apply_action();
    }
  });
  $('.dungdt-input-flag-icon').change(function () {
    $(this).closest('.input-group').find('.flag-icon').attr('class', '').addClass('flag-icon flag-icon-' + $(this).val());
  });
  $('.dungdt_input_locale').change(function () {});
  $('.tag-input').keypress(function (e) {
    // console.log(e);
    if (e.keyCode == 13) {
      var val = $(this).val();

      if (val) {
        var html = '<span class="tag_item">' + val + '       <span data-role="remove"></span>\n' + '                                                    <input type="hidden" name="tag_name[]" value="' + val + '">\n' + '                                                </span>';
        $(this).parent().find('.show_tags').append(html);
        $(this).val('');
      }

      e.preventDefault();
      return false;
    }
  });
  $(document).on('click', '[data-role=remove]', function () {
    $(this).closest('.tag_item').remove();
  }); // Form validation

  var forms = document.getElementsByClassName('needs-validation'); // Loop over them and prevent submission

  var validation = Array.prototype.filter.call(forms, function (form) {
    form.addEventListener('submit', function (event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})(jQuery);

/***/ }),

/***/ "./resources/admin/js/_menu.js":
/*!*************************************!*\
  !*** ./resources/admin/js/_menu.js ***!
  \*************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var he_tree_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! he-tree-vue */ "./node_modules/he-tree-vue/dist/he-tree-vue.esm.js");
// import {VueNestableHandle, VueNestable} from 'vue-nestable'
// import {DraggableTree} from 'vue-draggable-nested-tree'
 // import draggable from 'vuedraggable'
// import NestedDraggable from './components/nested-draggable.vue'

(function ($) {
  var id = $('#menu-app');

  if (!id.length) {
    return;
  }

  var menu_id = id.data('id');
  new Vue({
    el: '#menu-app',
    components: {
      // VueNestable,
      // VueNestableHandle,
      DraggableTree: he_tree_vue__WEBPACK_IMPORTED_MODULE_0__["Tree"].mixPlugins([he_tree_vue__WEBPACK_IMPORTED_MODULE_0__["Draggable"]]) // draggable,
      // NestedDraggable

    },
    data: {
      items: current_menu_items,
      item_types: [],
      custom_url: '',
      custom_name: "",
      name: current_menu_name,
      message: {
        type: false,
        content: ''
      },
      custom_show: false,
      locations: current_menu_locations,
      currentIndex: current_items_index + 1,
      triggerClass: {
        "default": "drag-trigger"
      }
    },
    mounted: function mounted() {
      this.reloadTypes(); // if(menu_id){
      //     this.reloadItems();
      // }
    },
    methods: {
      toogleItem: function toogleItem(item) {
        if (item._open) {
          item._open = false;
        } else {
          item._open = true;
        }
      },
      searchItems: function searchItems(type) {
        // if(!type.q) return;
        $.ajax({
          url: bookingCore.url + '/admin/module/core/menu/searchTypeItems',
          data: {
            "class": type["class"],
            q: type.q
          },
          dataType: 'json',
          type: 'post',
          success: function success(res) {
            if (res.status) {
              type.items = res.data;
            }
          },
          error: function error(e) {
            console.log(e);
          }
        });
      },
      reloadItems: function reloadItems() {
        var me = this;
        $.ajax({
          url: bookingCore.url + '/admin/module/core/menu/getItems',
          dataType: 'json',
          type: 'post',
          data: {
            id: menu_id
          },
          success: function success(res) {
            if (res.data && res.status) {
              me.items = res.data;
            }
          },
          error: function error(e) {
            console.log(e);
          }
        });
      },
      reloadTypes: function reloadTypes() {
        var me = this;
        $.ajax({
          url: bookingCore.url + '/admin/module/core/menu/getTypes',
          dataType: 'json',
          type: 'post',
          data: {},
          success: function success(res) {
            if (res.data && res.status) {
              me.item_types = res.data;
            }
          },
          error: function error(e) {
            console.log(e);
          }
        });
      },
      addToMenu: function addToMenu(type) {
        if (!type.selected.length) {
          return false;
        }

        for (var i = 0; i < type.items.length; i++) {
          if (type.selected.indexOf(type.items[i].id) > -1) {
            var item = Object.assign({}, type.items[i]); // item._id = this.currentIndex + 1;

            item._open = true;
            this.items.push(item);
            this.currentIndex += 1;
            console.log(this.currentIndex);
          }
        }

        type.selected = [];
      },
      addCustomUrl: function addCustomUrl() {
        if (!this.custom_name) return;
        this.items.push({
          name: this.custom_name,
          url: this.custom_url,
          item_model: 'custom',
          _open: false // _id: this.items.length + 1

        });
        this.custom_name = '';
        this.custom_url = '';
      },
      parseMenuItems: function parseMenuItems(origins) {
        var items = [];

        for (var i = 0; i < origins.length; i++) {
          var item = origins[i];
          var tmp = Object.assign({}, item);
          delete tmp._vm;
          delete tmp.parent;
          delete tmp.style;
          delete tmp.children;
          delete tmp.style;
          delete tmp.innerStyle;
          delete tmp.innerBackClass;
          delete tmp.innerBackStyle;

          if (item.children) {
            tmp.children = this.parseMenuItems(item.children);
          }

          items.push(tmp);
        }

        return items;
      },
      saveMenu: function saveMenu() {
        var me = this;
        var items = this.parseMenuItems(this.items);
        $.ajax({
          url: bookingCore.url + '/admin/module/core/menu/store',
          dataType: 'json',
          type: 'post',
          data: {
            id: menu_id,
            items: JSON.stringify(items),
            name: this.name,
            locations: this.locations,
            lang: current_menu_lang
          },
          success: function success(res) {
            if (res.message) {
              me.message.content = res.message;
              me.message.type = res.status;
            }

            if (res.url) {
              window.location.href = res.url;
            }
          },
          error: function error(e) {
            if (e.responseJSON.message) {
              me.message.content = e.responseJSON.message;
              me.message.type = false;
            } else {
              me.message.content = 'Can not save menu';
              me.message.type = false;
            }
          }
        });
      },
      deleteMenuItem: function deleteMenuItem(e, item, tree, path) {
        e.preventDefault();
        tree.removeNodeByPath(path);
      }
    }
  });
})(jQuery);

/***/ }),

/***/ "./resources/admin/js/app.js":
/*!***********************************!*\
  !*** ./resources/admin/js/app.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _module_template_admin_detail_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../module/template/admin/detail.js */ "./resources/module/template/admin/detail.js");
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
try {
  window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js")["default"];
  window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
  window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");

  __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

  window.bootbox = __webpack_require__(/*! bootbox */ "./node_modules/bootbox/bootbox.all.js");
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
} catch (e) {
  console.log(e);
} //window.ClassicEditor = require('../../ckeditor');
// window.ClassicEditor = require('@ckeditor/ckeditor5-build-classic');
// console.log(ClassicEditor);
// console.log(ClassicEditor);


__webpack_require__(/*! ../../module/media/admin/js/browser */ "./resources/module/media/admin/js/browser.js");

__webpack_require__(/*! ./_condition */ "./resources/admin/js/_condition.js");

__webpack_require__(/*! ./_base */ "./resources/admin/js/_base.js");

__webpack_require__(/*! ./_form */ "./resources/admin/js/_form.js");

__webpack_require__(/*! ./_menu */ "./resources/admin/js/_menu.js");

 // Template

if (document.getElementById('booking-core-template-detail')) {
  Object(_module_template_admin_detail_js__WEBPACK_IMPORTED_MODULE_0__["default"])();
}

$(document).on('hidden.bs.modal', '.modal', function () {
  $('.modal:visible').length && $(document.body).addClass('modal-open');
});
window.bookingCoreApp = {
  showSuccess: function showSuccess(configs) {
    var args = {};

    if (_typeof(configs) == 'object') {
      args = configs;
    } else {
      args.message = configs;
    }

    if (!args.title) {
      args.title = i18n.success;
    }

    args.centerVertical = true;
    bootbox.alert(args);
  },
  showError: function showError(configs) {
    var args = {};

    if (_typeof(configs) == 'object') {
      args = configs;
    } else {
      args.message = configs;
    }

    if (!args.title) {
      args.title = i18n.warning;
    }

    args.centerVertical = true;
    bootbox.alert(args);
  },
  showAjaxError: function showAjaxError(e) {
    if (typeof e.responseJSON != 'undefined' && e.responseJSON.message) {
      return this.showError(e.responseJSON.message);
    }

    if (e.responseText) {
      return this.showError(e.responseText);
    }
  },
  showAjaxMessage: function showAjaxMessage(json) {
    if (json.message) {
      if (json.status) {
        this.showSuccess(json);
      } else {
        this.showError(json);
      }
    }
  },
  showConfirm: function showConfirm(configs) {
    var args = {};

    if (_typeof(configs) == 'object') {
      args = configs;
    }

    args.buttons = {
      confirm: {
        label: '<i class="fa fa-check"></i> ' + i18n.confirm
      },
      cancel: {
        label: '<i class="fa fa-times"></i> ' + i18n.cancel
      }
    };
    args.centerVertical = true;
    bootbox.confirm(args);
  }
};

/***/ }),

/***/ "./resources/admin/js/ckeditor/uploadAdapter.js":
/*!******************************************************!*\
  !*** ./resources/admin/js/ckeditor/uploadAdapter.js ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var FindHouseAdapterUpload =
/*#__PURE__*/
function () {
  function FindHouseAdapterUpload(loader) {
    _classCallCheck(this, FindHouseAdapterUpload);

    // The file loader instance to use during the upload.
    this.loader = loader;
  } // Starts the upload process.


  _createClass(FindHouseAdapterUpload, [{
    key: "upload",
    value: function upload() {
      var _this = this;

      return this.loader.file.then(function (file) {
        return new Promise(function (resolve, reject) {
          _this._initRequest();

          _this._initListeners(resolve, reject, file);

          _this._sendRequest(file);
        });
      });
    } // Aborts the upload process.

  }, {
    key: "abort",
    value: function abort() {
      if (this.xhr) {
        this.xhr.abort();
      }
    } // Initializes the XMLHttpRequest object using the URL passed to the constructor.

  }, {
    key: "_initRequest",
    value: function _initRequest() {
      var xhr = this.xhr = new XMLHttpRequest(); // Note that your request may look different. It is up to you and your editor
      // integration to choose the right communication channel. This example uses
      // a POST request with JSON as a data structure but your configuration
      // could be different.

      xhr.open('POST', bookingCore.url + '/admin/module/media/store', true);
      xhr.responseType = 'json';
    } // Initializes XMLHttpRequest listeners.

  }, {
    key: "_initListeners",
    value: function _initListeners(resolve, reject, file) {
      var xhr = this.xhr;
      var loader = this.loader;
      var genericErrorText = "Couldn't upload file: ".concat(file.name, ".");
      xhr.addEventListener('error', function () {
        return reject(genericErrorText);
      });
      xhr.addEventListener('abort', function () {
        return reject();
      });
      xhr.addEventListener('load', function () {
        var response = xhr.response; // This example assumes the XHR server's "response" object will come with
        // an "error" which has its own "message" that can be passed to reject()
        // in the upload promise.
        //
        // Your integration may handle upload errors in a different way so make sure
        // it is done properly. The reject() function must be called when the upload fails.

        if (!response || !response.status) {
          if (response.message) {
            return reject(response.message);
          }

          return reject(response && response.error ? response.error.message : genericErrorText);
        } // If the upload is successful, resolve the upload promise with an object containing
        // at least the "default" URL, pointing to the image on the server.
        // This URL will be used to display the image in the content. Learn more in the
        // UploadAdapter#upload documentation.


        resolve(response.data.sizes);
      }); // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
      // properties which are used e.g. to display the upload progress bar in the editor
      // user interface.

      if (xhr.upload) {
        xhr.upload.addEventListener('progress', function (evt) {
          if (evt.lengthComputable) {
            loader.uploadTotal = evt.total;
            loader.uploaded = evt.loaded;
          }
        });
      }
    } // Prepares the data and sends the request.

  }, {
    key: "_sendRequest",
    value: function _sendRequest(file) {
      // Prepare the form data.
      var data = new FormData();
      data.append('file', file);
      this.xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content')); // Important note: This is the right place to implement security mechanisms
      // like authentication and CSRF protection. For instance, you can use
      // XMLHttpRequest.setRequestHeader() to set the request headers containing
      // the CSRF token generated earlier by your application.
      // Send the request.

      this.xhr.send(data);
    }
  }]);

  return FindHouseAdapterUpload;
}(); // ...


function FindHouseAdapterPlugin(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = function (loader) {
    // Configure the URL to the upload script in your back-end here!
    return new FindHouseAdapterUpload(loader);
  };
}

/* harmony default export */ __webpack_exports__["default"] = (FindHouseAdapterPlugin);

/***/ }),

/***/ "./resources/admin/scss/app.scss":
/*!***************************************!*\
  !*** ./resources/admin/scss/app.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/admin/scss/vendors.scss":
/*!*******************************************!*\
  !*** ./resources/admin/scss/vendors.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/module/media/admin/js/browser.js":
/*!****************************************************!*\
  !*** ./resources/module/media/admin/js/browser.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  window.uploaderModal = new Vue({
    el: '#cdn-browser',
    data: {
      files: [],
      viewType: 'grid',
      total: 0,
      totalPage: 0,
      fileTypes: [],
      selected: [],
      selectedLists: [],
      showUploader: false,
      apiFinished: false,
      modalEl: false,
      multiple: false,
      isLoading: false,
      filter: {
        page: 1
      },
      onSelect: function onSelect() {},
      uploadConfigs: {}
    },
    mounted: function mounted() {
      var me = this;
      this.modalEl = $('#cdn-browser-modal').modal({
        show: false
      }).on('show.bs.modal', function () {
        me.reloadLists();
      });
      this.$nextTick(function () {
        $(this.$refs.files).change(function () {
          me.upload(this.files);
        });
      });
    },
    watch: {
      uploadConfigs: function uploadConfigs(val) {
        this.multiple = val.multiple;
        this.onSelect = val.onSelect;
      }
    },
    methods: {
      show: function show(configs) {
        this.files = [];
        this.resetSelected();
        this.uploadConfigs = configs;
        this.modalEl.modal('show');
      },
      hide: function hide() {
        this.modalEl.modal('hide');
      },
      changePage: function changePage(p, e) {
        e.preventDefault();
        this.filter.page = p;
        this.reloadLists();
      },
      selectFile: function selectFile(file) {
        var index = this.selected.indexOf(file.id);

        if (index > -1) {
          this.selected.splice(index, 1);
          this.selectedLists.splice(index, 1);
        } else {
          if (!this.multiple) {
            this.selected = [];
            this.selectedLists = [];
          }

          this.selected.push(file.id);
          this.selectedLists.push(file);
        }
      },
      removeFiles: function removeFiles() {
        var me = this;
        bookingCoreApp.showConfirm({
          message: i18n.confirm_delete,
          callback: function callback(result) {
            if (result) {
              me.isLoading = true;
              $.ajax({
                url: bookingCore.url + '/admin/module/media/removeFiles',
                type: 'POST',
                data: {
                  file_ids: me.selected
                },
                dataType: 'json',
                success: function success(data) {
                  if (data.status === 1) {//bookingCoreApp.showSuccess(data);
                  }

                  if (data.status === 0) {
                    bookingCoreApp.showError(data);
                  }

                  me.isLoading = false;
                  me.reloadLists();
                },
                error: function error(e) {
                  me.isLoading = false;
                  bookingCoreApp.showAjaxError(e);
                  me.resetSelected();
                }
              });
            }
          }
        });
      },
      sendFiles: function sendFiles() {
        if (typeof this.onSelect == 'function') {
          var f = this.onSelect;
          f(this.selectedLists);
        }

        this.hide();
      },
      init: function init() {
        var me = this;
        this.reloadLists();
      },
      reloadLists: function reloadLists() {
        var me = this;
        $("#cdn-browser .icon-loading").addClass("active");
        me.isLoading = true;
        $.ajax({
          url: bookingCore.url + '/admin/module/media/getLists',
          type: 'POST',
          data: {
            file_type: this.uploadConfigs.file_type,
            page: this.filter.page,
            s: this.filter.s
          },
          dataType: 'json',
          success: function success(json) {
            me.resetSelected();
            me.files = json.data;
            me.total = json.total;
            me.totalPage = json.totalPage;
            me.isLoading = false;
            me.apiFinished = true;
          }
        });
      },
      upload: function upload(files) {
        var me = this;
        if (!files.length) return;
        console.log(files);

        for (var i = 0; i < files.length; i++) {
          var d = new FormData();
          d.append('file', files[i]);
          d.append('type', this.uploadConfigs.file_type);
          me.isLoading = true;
          $.ajax({
            url: bookingCore.url + '/admin/module/media/store',
            data: d,
            dataType: 'json',
            type: 'post',
            contentType: false,
            processData: false,
            success: function success(res) {
              me.isLoading = false;

              if (res.status) {
                me.reloadLists();
              }

              if (res.status === 0) {
                bookingCoreApp.showError(res);
              }

              $(me.$refs.files).val('');
            },
            error: function error(e) {
              bookingCoreApp.showAjaxError(e);
              $(me.$refs.files).val('');
              me.isLoading = false;
            }
          });
        }
      },
      initUploader: function initUploader() {},
      resetSelected: function resetSelected() {
        this.selectedLists = [];
        this.selected = [];
        this.total = 0;
        this.totalPage = 0;
        this.apiFinished = false;
      }
    }
  });
  Vue.component('file-item', {
    template: '#file-item-template',
    data: function data() {
      return {
        count: 0
      };
    },
    props: ['file', "selected", "viewType"],
    methods: {
      selectFile: function selectFile(file) {
        this.$emit('select-file', file);
      },
      fileClass: function fileClass(file) {
        var s = [];
        s.push(file.file_type);

        if (file.file_type.substr(0, 5) == 'image') {
          s.push('is-image');
        } else {
          s.push('not-image');
        }

        return s;
      },
      getFileThumb: function getFileThumb(file) {
        if (file.file_type.substr(0, 5) == 'image') {
          return '<img src="' + file.thumb_size + '">';
        }

        if (file.file_type.substr(0, 5) == 'video') {
          return '<img src="/assets/browser/icon/007-video-file.png">';
        }

        if (file.file_type.indexOf('x-zip-compressed') !== -1 || file.file_type.indexOf('/zip') !== -1) {
          return '<img src="/assets/browser/icon/005-zip-2.png">';
        }

        if (file.file_type.indexOf('/pdf') !== -1) {
          return '<img src="/assets/browser/icon/002-pdf-file-format-symbol.png">';
        }

        if (file.file_type.indexOf('/msword') !== -1 || file.file_type.indexOf('wordprocessingml') !== -1) {
          return '<img src="/assets/browser/icon/010-word.png">';
        }

        if (file.file_type.indexOf('spreadsheetml') !== -1 || file.file_type.indexOf('excel') !== -1) {
          return '<img src="/assets/browser/icon/011-excel-file.png">';
        }

        if (file.file_type.indexOf('presentation') !== -1) {
          return '<img src="/assets/browser/icon/powerpoint.png">';
        }

        if (file.file_type.indexOf('audio/') !== -1) {
          return '<img src="/assets/browser/icon/006-audio-file.png">';
        }

        return '<img src="/assets/browser/icon/008-file.png">';
      }
    }
  });
})(jQuery);

/***/ }),

/***/ "./resources/module/template/admin/components/column.vue":
/*!***************************************************************!*\
  !*** ./resources/module/template/admin/components/column.vue ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _column_vue_vue_type_template_id_1465b956___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./column.vue?vue&type=template&id=1465b956& */ "./resources/module/template/admin/components/column.vue?vue&type=template&id=1465b956&");
/* harmony import */ var _column_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./column.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/components/column.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _column_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _column_vue_vue_type_template_id_1465b956___WEBPACK_IMPORTED_MODULE_0__["render"],
  _column_vue_vue_type_template_id_1465b956___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/components/column.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/components/column.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./resources/module/template/admin/components/column.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_column_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./column.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/column.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_column_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/components/column.vue?vue&type=template&id=1465b956&":
/*!**********************************************************************************************!*\
  !*** ./resources/module/template/admin/components/column.vue?vue&type=template&id=1465b956& ***!
  \**********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_column_vue_vue_type_template_id_1465b956___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./column.vue?vue&type=template&id=1465b956& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/column.vue?vue&type=template&id=1465b956&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_column_vue_vue_type_template_id_1465b956___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_column_vue_vue_type_template_id_1465b956___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/module/template/admin/components/regular.vue":
/*!****************************************************************!*\
  !*** ./resources/module/template/admin/components/regular.vue ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _regular_vue_vue_type_template_id_74dd0ea6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./regular.vue?vue&type=template&id=74dd0ea6& */ "./resources/module/template/admin/components/regular.vue?vue&type=template&id=74dd0ea6&");
/* harmony import */ var _regular_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./regular.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/components/regular.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _regular_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _regular_vue_vue_type_template_id_74dd0ea6___WEBPACK_IMPORTED_MODULE_0__["render"],
  _regular_vue_vue_type_template_id_74dd0ea6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/components/regular.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/components/regular.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/module/template/admin/components/regular.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_regular_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./regular.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/regular.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_regular_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/components/regular.vue?vue&type=template&id=74dd0ea6&":
/*!***********************************************************************************************!*\
  !*** ./resources/module/template/admin/components/regular.vue?vue&type=template&id=74dd0ea6& ***!
  \***********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_regular_vue_vue_type_template_id_74dd0ea6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./regular.vue?vue&type=template&id=74dd0ea6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/regular.vue?vue&type=template&id=74dd0ea6&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_regular_vue_vue_type_template_id_74dd0ea6___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_regular_vue_vue_type_template_id_74dd0ea6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/module/template/admin/components/row.vue":
/*!************************************************************!*\
  !*** ./resources/module/template/admin/components/row.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _row_vue_vue_type_template_id_03362f2a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./row.vue?vue&type=template&id=03362f2a& */ "./resources/module/template/admin/components/row.vue?vue&type=template&id=03362f2a&");
/* harmony import */ var _row_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./row.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/components/row.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _row_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _row_vue_vue_type_template_id_03362f2a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _row_vue_vue_type_template_id_03362f2a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/components/row.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/components/row.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/module/template/admin/components/row.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_row_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./row.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/row.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_row_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/components/row.vue?vue&type=template&id=03362f2a&":
/*!*******************************************************************************************!*\
  !*** ./resources/module/template/admin/components/row.vue?vue&type=template&id=03362f2a& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_row_vue_vue_type_template_id_03362f2a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./row.vue?vue&type=template&id=03362f2a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/components/row.vue?vue&type=template&id=03362f2a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_row_vue_vue_type_template_id_03362f2a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_row_vue_vue_type_template_id_03362f2a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/module/template/admin/custom-fields.js":
/*!**********************************************************!*\
  !*** ./resources/module/template/admin/custom-fields.js ***!
  \**********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _fields_field_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./fields/field-editor */ "./resources/module/template/admin/fields/field-editor.vue");
/* harmony import */ var _fields_field_select2__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./fields/field-select2 */ "./resources/module/template/admin/fields/field-select2.vue");
/* harmony import */ var _fields_field_listItem__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./fields/field-listItem */ "./resources/module/template/admin/fields/field-listItem.vue");
/* harmony import */ var _fields_field_upload__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./fields/field-upload */ "./resources/module/template/admin/fields/field-upload.vue");
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(vue__WEBPACK_IMPORTED_MODULE_4__);





vue__WEBPACK_IMPORTED_MODULE_4___default.a.component("fieldEditor", _fields_field_editor__WEBPACK_IMPORTED_MODULE_0__["default"]);
vue__WEBPACK_IMPORTED_MODULE_4___default.a.component("fieldSelect2", _fields_field_select2__WEBPACK_IMPORTED_MODULE_1__["default"]);
vue__WEBPACK_IMPORTED_MODULE_4___default.a.component("fieldListItem", _fields_field_listItem__WEBPACK_IMPORTED_MODULE_2__["default"]);
vue__WEBPACK_IMPORTED_MODULE_4___default.a.component("fieldUploader", _fields_field_upload__WEBPACK_IMPORTED_MODULE_3__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/detail.js":
/*!***************************************************!*\
  !*** ./resources/module/template/admin/detail.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vuedraggable__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuedraggable */ "./node_modules/vuedraggable/dist/vuedraggable.common.js");
/* harmony import */ var vuedraggable__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vuedraggable__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vue-form-generator */ "./node_modules/vue-form-generator/dist/vfg.js");
/* harmony import */ var vue_form_generator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(vue_form_generator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_row__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/row */ "./resources/module/template/admin/components/row.vue");
/* harmony import */ var _components_column__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/column */ "./resources/module/template/admin/components/column.vue");
/* harmony import */ var _components_regular__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/regular */ "./resources/module/template/admin/components/regular.vue");







__webpack_require__(/*! ./custom-fields */ "./resources/module/template/admin/custom-fields.js");

vue__WEBPACK_IMPORTED_MODULE_0___default.a.component('RowBlock', _components_row__WEBPACK_IMPORTED_MODULE_3__["default"]);
vue__WEBPACK_IMPORTED_MODULE_0___default.a.component('ColumnBlock', _components_column__WEBPACK_IMPORTED_MODULE_4__["default"]);
vue__WEBPACK_IMPORTED_MODULE_0___default.a.component('RegularBlock', _components_regular__WEBPACK_IMPORTED_MODULE_5__["default"]);
/* harmony default export */ __webpack_exports__["default"] = (function () {
  window.editBlockScreen = new vue__WEBPACK_IMPORTED_MODULE_0___default.a({
    el: '#editBlockScreenApp',
    data: {
      modal: false,
      item: {},
      block: {},
      model: {},
      onEdit: false,
      template_i18n: template_i18n,
      options: {}
    },
    mounted: function mounted() {
      var me = this;
      this.modal = $('#editBlockScreen');
      this.$nextTick(function () {// me.modal.modal({
        //     show:false
        // });
      });
    },
    components: {
      "vue-form-generator": vue_form_generator__WEBPACK_IMPORTED_MODULE_2___default.a.component
    },
    methods: {
      openEdit: function openEdit(item, block) {
        this.item = item;
        this.block = block;
        this.model = Object.assign({}, this.item.model);
        this.modal.modal('show');
        manageBlocksScreen.message.content = '';
      },
      saveModal: function saveModal() {
        this.item.model = Object.assign({}, this.model);
        this.onEdit = false;
        this.modal.modal('toggle');
      },
      hideModal: function hideModal() {
        this.modal.modal('toggle');
      }
    }
  });
  window.manageBlocksScreen = new vue__WEBPACK_IMPORTED_MODULE_0___default.a({
    el: '#booking-core-template-detail',
    data: {
      items: current_template_items,
      blocks: [],
      title: current_template_title,
      message: {
        content: '',
        type: false
      },
      onSaving: false
    },
    mounted: function mounted() {
      this.reloadBlocks();
    },
    methods: {
      deleteBlock: function deleteBlock(index) {
        console.log(index); //console.log(this.items);

        this.items.splice(index, 1);
      },
      saveTemplate: function saveTemplate() {
        var me = this;

        if (!this.title) {
          return false;
        }

        this.onSaving = true;
        $.ajax({
          url: bookingCore.url + '/admin/module/template/store',
          dataType: 'json',
          type: 'post',
          data: {
            id: template_id,
            content: JSON.stringify(this.items),
            title: this.title,
            lang: current_menu_lang
          },
          success: function success(res) {
            me.onSaving = false;

            if (res.message) {
              me.message.content = res.message;
              me.message.type = res.status;
            }

            if (res.url) {
              window.location.href = res.url;
            }
          },
          error: function error(e) {
            me.onSaving = false;

            if (e.responseJSON.message) {
              me.message.content = e.responseJSON.message;
              me.message.type = false;
            } else {
              me.message.content = 'Can not save menu';
              me.message.type = false;
            }
          }
        });
      },
      reloadBlocks: function reloadBlocks() {
        var me = this;
        $.ajax({
          url: bookingCore.url + '/admin/module/template/getBlocks',
          dataType: 'json',
          type: 'get',
          success: function success(res) {
            if (res.status) {
              me.blocks = res.data;
            }
          },
          error: function error(e) {
            console.log(e);
          }
        });
      },
      addBlock: function addBlock(block) {
        var toItem = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

        /*if(toItem == false && block.id!='row'){
            var blockRow = this.searchBlockById('row');
            var blockColumn = this.searchBlockById('column');
              var row = this.addBlock(blockRow);
              if(block.id!='column'){
                toItem = this.addBlock(blockColumn,row);
            }else{
                toItem = row;
            }
          }*/
        var item = this.getBlockParams(block);

        if (toItem) {
          toItem.children.push(item);
        } else {
          this.items.push(item);
        }

        return item;
      },
      getBlockParams: function getBlockParams(block) {
        var res = {
          type: block.id,
          name: block.name,
          model: block.model,
          component: block.component,
          open: true
        };

        if (block.is_container) {
          res.is_container = true;
          res.children = [];
        }

        return res;
      },
      searchBlockById: function searchBlockById(id) {
        for (var i = 0; i < this.blocks.length; i++) {
          if (this.blocks[i].id == id) {
            return this.blocks[i];
          }
        }
      }
    },
    components: {
      RowBlock: _components_row__WEBPACK_IMPORTED_MODULE_3__["default"],
      ColumnBlock: _components_column__WEBPACK_IMPORTED_MODULE_4__["default"],
      RegularBlock: _components_regular__WEBPACK_IMPORTED_MODULE_5__["default"],
      draggable: vuedraggable__WEBPACK_IMPORTED_MODULE_1___default.a
    }
  });
});

/***/ }),

/***/ "./resources/module/template/admin/fields/field-editor.vue":
/*!*****************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-editor.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _field_editor_vue_vue_type_template_id_24a3e51c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./field-editor.vue?vue&type=template&id=24a3e51c& */ "./resources/module/template/admin/fields/field-editor.vue?vue&type=template&id=24a3e51c&");
/* harmony import */ var _field_editor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./field-editor.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/fields/field-editor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _field_editor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _field_editor_vue_vue_type_template_id_24a3e51c___WEBPACK_IMPORTED_MODULE_0__["render"],
  _field_editor_vue_vue_type_template_id_24a3e51c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/fields/field-editor.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-editor.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-editor.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_editor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-editor.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-editor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_editor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-editor.vue?vue&type=template&id=24a3e51c&":
/*!************************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-editor.vue?vue&type=template&id=24a3e51c& ***!
  \************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_editor_vue_vue_type_template_id_24a3e51c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-editor.vue?vue&type=template&id=24a3e51c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-editor.vue?vue&type=template&id=24a3e51c&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_editor_vue_vue_type_template_id_24a3e51c___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_editor_vue_vue_type_template_id_24a3e51c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/module/template/admin/fields/field-listItem.vue":
/*!*******************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-listItem.vue ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _field_listItem_vue_vue_type_template_id_dfe7ee80___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./field-listItem.vue?vue&type=template&id=dfe7ee80& */ "./resources/module/template/admin/fields/field-listItem.vue?vue&type=template&id=dfe7ee80&");
/* harmony import */ var _field_listItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./field-listItem.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/fields/field-listItem.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _field_listItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _field_listItem_vue_vue_type_template_id_dfe7ee80___WEBPACK_IMPORTED_MODULE_0__["render"],
  _field_listItem_vue_vue_type_template_id_dfe7ee80___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/fields/field-listItem.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-listItem.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-listItem.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_listItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-listItem.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-listItem.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_listItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-listItem.vue?vue&type=template&id=dfe7ee80&":
/*!**************************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-listItem.vue?vue&type=template&id=dfe7ee80& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_listItem_vue_vue_type_template_id_dfe7ee80___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-listItem.vue?vue&type=template&id=dfe7ee80& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-listItem.vue?vue&type=template&id=dfe7ee80&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_listItem_vue_vue_type_template_id_dfe7ee80___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_listItem_vue_vue_type_template_id_dfe7ee80___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/module/template/admin/fields/field-select2.vue":
/*!******************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-select2.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _field_select2_vue_vue_type_template_id_901394d2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./field-select2.vue?vue&type=template&id=901394d2& */ "./resources/module/template/admin/fields/field-select2.vue?vue&type=template&id=901394d2&");
/* harmony import */ var _field_select2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./field-select2.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/fields/field-select2.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _field_select2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _field_select2_vue_vue_type_template_id_901394d2___WEBPACK_IMPORTED_MODULE_0__["render"],
  _field_select2_vue_vue_type_template_id_901394d2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/fields/field-select2.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-select2.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-select2.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_select2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-select2.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-select2.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_select2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-select2.vue?vue&type=template&id=901394d2&":
/*!*************************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-select2.vue?vue&type=template&id=901394d2& ***!
  \*************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_select2_vue_vue_type_template_id_901394d2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-select2.vue?vue&type=template&id=901394d2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-select2.vue?vue&type=template&id=901394d2&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_select2_vue_vue_type_template_id_901394d2___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_select2_vue_vue_type_template_id_901394d2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/module/template/admin/fields/field-upload.vue":
/*!*****************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-upload.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _field_upload_vue_vue_type_template_id_72eb67b0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./field-upload.vue?vue&type=template&id=72eb67b0& */ "./resources/module/template/admin/fields/field-upload.vue?vue&type=template&id=72eb67b0&");
/* harmony import */ var _field_upload_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./field-upload.vue?vue&type=script&lang=js& */ "./resources/module/template/admin/fields/field-upload.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _field_upload_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _field_upload_vue_vue_type_template_id_72eb67b0___WEBPACK_IMPORTED_MODULE_0__["render"],
  _field_upload_vue_vue_type_template_id_72eb67b0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/module/template/admin/fields/field-upload.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-upload.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-upload.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_upload_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-upload.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-upload.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_field_upload_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/module/template/admin/fields/field-upload.vue?vue&type=template&id=72eb67b0&":
/*!************************************************************************************************!*\
  !*** ./resources/module/template/admin/fields/field-upload.vue?vue&type=template&id=72eb67b0& ***!
  \************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_upload_vue_vue_type_template_id_72eb67b0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./field-upload.vue?vue&type=template&id=72eb67b0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/module/template/admin/fields/field-upload.vue?vue&type=template&id=72eb67b0&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_upload_vue_vue_type_template_id_72eb67b0___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_field_upload_vue_vue_type_template_id_72eb67b0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ 0:
/*!*************************************************************************************************************!*\
  !*** multi ./resources/admin/js/app.js ./resources/admin/scss/vendors.scss ./resources/admin/scss/app.scss ***!
  \*************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\quandq\Localhost\booking-core\resources\admin\js\app.js */"./resources/admin/js/app.js");
__webpack_require__(/*! D:\quandq\Localhost\booking-core\resources\admin\scss\vendors.scss */"./resources/admin/scss/vendors.scss");
module.exports = __webpack_require__(/*! D:\quandq\Localhost\booking-core\resources\admin\scss\app.scss */"./resources/admin/scss/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);
