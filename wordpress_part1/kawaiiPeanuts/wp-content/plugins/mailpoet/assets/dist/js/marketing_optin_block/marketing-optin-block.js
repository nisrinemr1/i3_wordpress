!function(){"use strict";!function(){var e=window.wp.element,t=function({icon:t,size:o=24,...n}){return(0,e.cloneElement)(t,{width:o,height:o,...n})},o=window.wp.primitives,n=(0,e.createElement)(o.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,e.createElement)(o.Path,{fillRule:"evenodd",d:"M6.863 13.644L5 13.25h-.5a.5.5 0 01-.5-.5v-3a.5.5 0 01.5-.5H5L18 6.5h2V16h-2l-3.854-.815.026.008a3.75 3.75 0 01-7.31-1.549zm1.477.313a2.251 2.251 0 004.356.921l-4.356-.921zm-2.84-3.28L18.157 8h.343v6.5h-.343L5.5 11.823v-1.146z",clipRule:"evenodd"})),l=window.wp.blocks,i=window.wp.i18n,a=window.wp.blockEditor,r=window.wc.blocksCheckout,c=window.wc.wcSettings,m=window.wp.components;const s=(0,c.getSetting)("adminUrl"),{optinEnabled:p,defaultText:w}=(0,c.getSetting)("mailpoet_data"),d=()=>(0,e.createElement)(m.Placeholder,{icon:(0,e.createElement)(t,{icon:n}),label:(0,i.__)("marketing-opt-in-label","mailpoet"),className:"wp-block-mailpoet-newsletter-block-placeholder"},(0,e.createElement)("span",{className:"wp-block-mailpoet-newsletter-block-placeholder__description"},(0,i.__)("marketing-opt-in-not-shown","mailpoet")),(0,e.createElement)(m.Button,{isPrimary:!0,href:`${s}admin.php?page=mailpoet-settings#/woocommerce`,target:"_blank",rel:"noopener noreferrer",className:"wp-block-mailpoet-newsletter-block-placeholder__button"},(0,i.__)("marketing-opt-in-enable","mailpoet"))),{defaultText:k}=(0,c.getSetting)("mailpoet_data");var u={text:{type:"string",default:k}},b=JSON.parse('{"apiVersion":2,"name":"mailpoet/marketing-optin-block","version":"0.1.0","title":"MailPoet Marketing Opt-in","category":"woocommerce","textdomain":"mailpoet","supports":{"align":false,"html":false,"multiple":false,"reusable":false,"inserter":false},"attributes":{"lock":{"type":"object","default":{"remove":true,"move":false}}},"parent":["woocommerce/checkout-contact-information-block"],"editorScript":"file:../../../dist/js/marketing_optin_block/marketing-optin-block.js","editorStyle":"file:../../../dist/js/marketing_optin_block/marketing-optin-block.css"}');(0,l.registerBlockType)(b,{icon:{src:(0,e.createElement)(t,{icon:n}),foreground:"#7f54b3"},attributes:{...b.attributes,...u},edit:({attributes:{text:t},setAttributes:o})=>{const n=(0,a.useBlockProps)(),l=t||w;return(0,e.createElement)("div",n,p?(0,e.createElement)(e.Fragment,null,(0,e.createElement)("div",{className:"wc-block-checkout__marketing"},(0,e.createElement)(r.CheckboxControl,{id:"mailpoet-marketing-optin",checked:!1}),(0,e.createElement)(a.RichText,{value:l,onChange:e=>o({text:e})}))):(0,e.createElement)(d,null))},save:()=>(0,e.createElement)("div",a.useBlockProps.save())})}()}();