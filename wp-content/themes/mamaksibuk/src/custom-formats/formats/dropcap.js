import { registerFormatType, toggleFormat } from "@wordpress/rich-text";
import { RichTextToolbarButton } from "@wordpress/block-editor";
import { useSelect } from "@wordpress/data";

class DropCapFormat {
  constructor() {
    this._init();
  }
  _init() {
    const ConditionalButton = ({ isActive, onChange, value }) => {
      const selectedBlock = useSelect((select) => {
        return select("core/block-editor").getSelectedBlock();
      }, []);

      if (selectedBlock && selectedBlock.name !== "core/paragraph") {
        return null;
      }

      return (
        <RichTextToolbarButton
          icon="editor-textcolor"
          title="Dropcap"
          onClick={() => {
            onChange(
              toggleFormat(value, {
                type: "my-custom-format/sample-output",
              })
            );
          }}
          isActive={isActive}
        />
      );
    };
    registerFormatType("my-custom-format/sample-output", {
      title: "Dropcap",
      tagName: "span",
      className: 'dropcap',
      edit: ConditionalButton,
    });
  }
}

export default DropCapFormat;
