import { defineComponent, mergeProps, useSSRContext, withCtx, unref, createVNode, toDisplayString, computed, useSlots, renderSlot, openBlock, createBlock, createCommentVNode, createSSRApp, h } from "vue";
import { ssrRenderAttrs, ssrRenderSlot, ssrRenderComponent, ssrRenderAttr, ssrInterpolate } from "vue/server-renderer";
import { createInertiaApp } from "@inertiajs/vue3";
import { renderToString } from "@vue/server-renderer";
const _sfc_main$4 = /* @__PURE__ */ defineComponent({
  __name: "Table",
  __ssrInlineRender: true,
  props: {
    width: {},
    cellpadding: {},
    cellspacing: {},
    role: {}
  },
  setup(__props) {
    const props = __props;
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<table${ssrRenderAttrs(mergeProps({
        width: props.width ?? "100%",
        cellpadding: props.cellpadding ?? "0",
        cellspacing: props.cellspacing ?? "0",
        role: props.role ?? "presentation"
      }, _attrs))}><tr><td>`);
      ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
      _push(`</td></tr></table>`);
    };
  }
});
const _sfc_setup$4 = _sfc_main$4.setup;
_sfc_main$4.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("vendor/capsulescodes/inertia-mailable/components/vue/tags/Table.vue");
  return _sfc_setup$4 ? _sfc_setup$4(props, ctx) : void 0;
};
const logotype = "https://raw.githubusercontent.com/capsulescodes/inertia-mailable/main/art/capsules-inertia-mailable-logotype.png";
const _sfc_main$3 = /* @__PURE__ */ defineComponent({
  __name: "Header",
  __ssrInlineRender: true,
  setup(__props) {
    const name = "Inertia Mailable";
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$4, mergeProps({ class: "p-12 text-center" }, _attrs), {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<img${ssrRenderAttr("src", logotype)} class="w-12 max-h-12 mb-3"${ssrRenderAttr("alt", unref(name))}${_scopeId}><a${ssrRenderAttr("href", unref(name))} class="block text-lg font-bold no-underline text-slate-800"${_scopeId}>${ssrInterpolate(unref(name))}</a>`);
          } else {
            return [
              createVNode("img", {
                src: logotype,
                class: "w-12 max-h-12 mb-3",
                alt: unref(name)
              }, null, 8, ["alt"]),
              createVNode("a", {
                href: unref(name),
                class: "block text-lg font-bold no-underline text-slate-800",
                textContent: toDisplayString(unref(name))
              }, null, 8, ["href", "textContent"])
            ];
          }
        }),
        _: 1
      }, _parent));
    };
  }
});
const _sfc_setup$3 = _sfc_main$3.setup;
_sfc_main$3.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("vendor/capsulescodes/inertia-mailable/components/vue/Header.vue");
  return _sfc_setup$3 ? _sfc_setup$3(props, ctx) : void 0;
};
const _sfc_main$2 = /* @__PURE__ */ defineComponent({
  __name: "Footer",
  __ssrInlineRender: true,
  setup(__props) {
    const name = "Inertia Mailable";
    const date = (/* @__PURE__ */ new Date()).getFullYear();
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$4, mergeProps({
        class: "p-10",
        align: "center",
        width: "570"
      }, _attrs), {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<p class="text-xs text-center text-slate-400"${_scopeId}>${ssrInterpolate(`© ${unref(date)} ${unref(name)}. All rights reserved`)}</p>`);
          } else {
            return [
              createVNode("p", {
                class: "text-xs text-center text-slate-400",
                textContent: toDisplayString(`© ${unref(date)} ${unref(name)}. All rights reserved`)
              }, null, 8, ["textContent"])
            ];
          }
        }),
        _: 1
      }, _parent));
    };
  }
});
const _sfc_setup$2 = _sfc_main$2.setup;
_sfc_main$2.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("vendor/capsulescodes/inertia-mailable/components/vue/Footer.vue");
  return _sfc_setup$2 ? _sfc_setup$2(props, ctx) : void 0;
};
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Layout",
  __ssrInlineRender: true,
  setup(__props) {
    const hasSubCopy = computed(() => !!useSlots()["subcopy"]);
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$4, mergeProps({ align: "center" }, _attrs), {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(ssrRenderComponent(_sfc_main$3, null, null, _parent2, _scopeId));
            _push2(ssrRenderComponent(_sfc_main$4, {
              class: "p-8 shadow bg-white",
              align: "center",
              width: "570"
            }, {
              default: withCtx((_2, _push3, _parent3, _scopeId2) => {
                if (_push3) {
                  ssrRenderSlot(_ctx.$slots, "default", {}, null, _push3, _parent3, _scopeId2);
                  if (hasSubCopy.value) {
                    _push3(ssrRenderComponent(_sfc_main$4, { class: "mt-6 pt-6 border-0 border-t border-solid border-slate-200" }, {
                      default: withCtx((_3, _push4, _parent4, _scopeId3) => {
                        if (_push4) {
                          ssrRenderSlot(_ctx.$slots, "subcopy", {}, null, _push4, _parent4, _scopeId3);
                        } else {
                          return [
                            renderSlot(_ctx.$slots, "subcopy")
                          ];
                        }
                      }),
                      _: 3
                    }, _parent3, _scopeId2));
                  } else {
                    _push3(`<!---->`);
                  }
                } else {
                  return [
                    renderSlot(_ctx.$slots, "default"),
                    hasSubCopy.value ? (openBlock(), createBlock(_sfc_main$4, {
                      key: 0,
                      class: "mt-6 pt-6 border-0 border-t border-solid border-slate-200"
                    }, {
                      default: withCtx(() => [
                        renderSlot(_ctx.$slots, "subcopy")
                      ]),
                      _: 3
                    })) : createCommentVNode("", true)
                  ];
                }
              }),
              _: 3
            }, _parent2, _scopeId));
            _push2(ssrRenderComponent(_sfc_main$2, null, null, _parent2, _scopeId));
          } else {
            return [
              createVNode(_sfc_main$3),
              createVNode(_sfc_main$4, {
                class: "p-8 shadow bg-white",
                align: "center",
                width: "570"
              }, {
                default: withCtx(() => [
                  renderSlot(_ctx.$slots, "default"),
                  hasSubCopy.value ? (openBlock(), createBlock(_sfc_main$4, {
                    key: 0,
                    class: "mt-6 pt-6 border-0 border-t border-solid border-slate-200"
                  }, {
                    default: withCtx(() => [
                      renderSlot(_ctx.$slots, "subcopy")
                    ]),
                    _: 3
                  })) : createCommentVNode("", true)
                ]),
                _: 3
              }),
              createVNode(_sfc_main$2)
            ];
          }
        }),
        _: 3
      }, _parent));
    };
  }
});
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("vendor/capsulescodes/inertia-mailable/components/vue/Layout.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const image = "https://raw.githubusercontent.com/capsulescodes/inertia-mailable/main/art/capsules-inertia-mailable-mail-image.png";
const _sfc_main = {
  __name: "Welcome",
  __ssrInlineRender: true,
  props: { name: { type: String, required: true } },
  setup(__props) {
    const props = __props;
    const app = "Inertia Mailable";
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$1, _attrs, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<p${_scopeId}>Hello, ${ssrInterpolate(props.name)}!</p><p${_scopeId}>This is a mail made with Laravel, Inertia, Vue</p>`);
            _push2(ssrRenderComponent(_sfc_main$4, { align: "center" }, {
              default: withCtx((_2, _push3, _parent3, _scopeId2) => {
                if (_push3) {
                  _push3(ssrRenderComponent(_sfc_main$4, { align: "center" }, {
                    default: withCtx((_3, _push4, _parent4, _scopeId3) => {
                      if (_push4) {
                        _push4(ssrRenderComponent(_sfc_main$4, null, {
                          default: withCtx((_4, _push5, _parent5, _scopeId4) => {
                            if (_push5) {
                              _push5(`<img class="my-4 max-w-full"${ssrRenderAttr("src", image)}${_scopeId4}>`);
                            } else {
                              return [
                                createVNode("img", {
                                  class: "my-4 max-w-full",
                                  src: image
                                })
                              ];
                            }
                          }),
                          _: 1
                        }, _parent4, _scopeId3));
                      } else {
                        return [
                          createVNode(_sfc_main$4, null, {
                            default: withCtx(() => [
                              createVNode("img", {
                                class: "my-4 max-w-full",
                                src: image
                              })
                            ]),
                            _: 1
                          })
                        ];
                      }
                    }),
                    _: 1
                  }, _parent3, _scopeId2));
                } else {
                  return [
                    createVNode(_sfc_main$4, { align: "center" }, {
                      default: withCtx(() => [
                        createVNode(_sfc_main$4, null, {
                          default: withCtx(() => [
                            createVNode("img", {
                              class: "my-4 max-w-full",
                              src: image
                            })
                          ]),
                          _: 1
                        })
                      ]),
                      _: 1
                    })
                  ];
                }
              }),
              _: 1
            }, _parent2, _scopeId));
            _push2(`<p${_scopeId}>Regards,</p><p${_scopeId}>${ssrInterpolate(unref(app))}</p>`);
          } else {
            return [
              createVNode("p", null, "Hello, " + toDisplayString(props.name) + "!", 1),
              createVNode("p", null, "This is a mail made with Laravel, Inertia, Vue"),
              createVNode(_sfc_main$4, { align: "center" }, {
                default: withCtx(() => [
                  createVNode(_sfc_main$4, { align: "center" }, {
                    default: withCtx(() => [
                      createVNode(_sfc_main$4, null, {
                        default: withCtx(() => [
                          createVNode("img", {
                            class: "my-4 max-w-full",
                            src: image
                          })
                        ]),
                        _: 1
                      })
                    ]),
                    _: 1
                  })
                ]),
                _: 1
              }),
              createVNode("p", null, "Regards,"),
              createVNode("p", null, toDisplayString(unref(app)), 1)
            ];
          }
        }),
        subcopy: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<p class="text-xs"${_scopeId}>This is a subcopy made with Laravel, Inertia and Vue</p>`);
          } else {
            return [
              createVNode("p", { class: "text-xs" }, "This is a subcopy made with Laravel, Inertia and Vue")
            ];
          }
        }),
        _: 1
      }, _parent));
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/mails/Welcome.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const __vite_glob_0_0 = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  default: _sfc_main
}, Symbol.toStringTag, { value: "Module" }));
createInertiaApp({
  page: JSON.parse(process.argv[2]),
  render: renderToString,
  resolve: (name) => Object.assign({ "./mails/Welcome.vue": __vite_glob_0_0 })[`./mails/${name}.vue`],
  setup({ App, props, plugin }) {
    return createSSRApp({ render: () => h(App, props) }).use(plugin);
  }
}).then((data) => process.stdout.write(JSON.stringify(data)));
