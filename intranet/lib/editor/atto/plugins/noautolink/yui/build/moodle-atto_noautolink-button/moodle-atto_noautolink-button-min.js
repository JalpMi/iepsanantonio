YUI.add("moodle-atto_noautolink-button",function(e,t){e.namespace("M.atto_noautolink").Button=e.Base.create("button",e.M.editor_atto.EditorPlugin,[],{initializer:function(){this.addButton({icon:"e/prevent_autolink",callback:this._preventAutoLink,tags:".nolink"})},_preventAutoLink:function(){this.get("host").toggleInlineSelectionClass(["nolink"])}})},"@VERSION@",{requires:["moodle-editor_atto-plugin"]});
