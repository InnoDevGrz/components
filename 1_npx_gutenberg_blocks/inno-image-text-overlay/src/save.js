import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const { imageUrl, innerColor, innerBgColor } = attributes;

	const blockProps = useBlockProps.save();

	return (
		<div {...blockProps}>
			{imageUrl && (
				<img
					src={imageUrl}
					alt=""
					style={{ maxWidth: '100%', height: 'auto' }}
				/>
			)}
			<div
				className="inner-container"
				style={{
					backgroundColor: innerBgColor  || '#332461',
					color: innerColor || '#ffffff',
				}}
			>
				<InnerBlocks.Content />
			</div>
		</div>
	);
}
