import {useBlockProps, RichText, InnerBlocks} from '@wordpress/block-editor';

export default function save({attributes}) {
	const {title, uid} = attributes;

	const blockProps = useBlockProps.save({
		className: 'is-closed'
	});

	return (
		<div {...blockProps}>
			<h3 className="inno-accordion-heading">
				<RichText.Content
					tagName="button"
					value={title}
					className="inno-accordion-button"
					aria-expanded="false"
					aria-controls={uid}
					type="button"
				/>
			</h3>
			<div
				className="inno-accordion-content"
				id={uid}
				hidden={true}
			>
				<InnerBlocks.Content/>
			</div>
		</div>
	);
}
