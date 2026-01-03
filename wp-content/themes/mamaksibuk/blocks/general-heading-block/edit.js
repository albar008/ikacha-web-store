import { useDispatch } from "@wordpress/data";
import {
  useBlockProps,
  RichText,
  InspectorControls,
  BlockControls,
} from "@wordpress/block-editor";
import { store as noticesStore } from "@wordpress/notices";
import { ToolbarGroup, ToolbarButton } from "@wordpress/components";
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps();
  const { title, subtitle } = attributes;
  return (
    <div {...blockProps}>
      <RichText
        tagName="span"
        value={subtitle}
        onChange={(newSubtitle) => setAttributes({ subtitle: newSubtitle })}
        allowedFormats={['core/bold', 'core/italic']}
        placeholder="Please, Insert subtitle"
      />
      <RichText
        tagName="h3"
        value={title}
        onChange={(newTitle) => setAttributes({ title: newTitle })}
        allowedFormats={['core/bold', 'core/italic']}
        placeholder="Please, Insert title"
      />
    </div>
  );
}
