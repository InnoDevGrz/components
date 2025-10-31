import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	RichText,
	InnerBlocks
} from '@wordpress/block-editor';
import { useEffect } from '@wordpress/element';

export default function Edit({ attributes, setAttributes, clientId }) {
	const { title, open, uid } = attributes;

	// UID einmalig setzen
	useEffect(() => {
		if (!uid) {
			setAttributes({ uid: `accordion-content-${clientId}` });
		}
	}, []);

	const accordionId = uid || `accordion-content-${clientId}`;

	const blockProps = useBlockProps({
		className: open ? 'is-open' : 'is-closed',
	});

	return (
		<div {...blockProps}>
			<h3 className="inno-accordion-heading">
				<RichText
					tagName="button"
					value={title}
					className="inno-accordion-button"
					onChange={(val) => setAttributes({ title: val })}
					placeholder={__('Frage hier eingeben ...', 'tsc')}
					aria-expanded={open}
					aria-controls={accordionId}
					type="button"
					onClick={() => setAttributes({ open: !open })}
				/>
			</h3>

			<div
				className="inno-accordion-content"
				id={accordionId}
				hidden={!open}
			>
				<InnerBlocks
					allowedBlocks={['core/paragraph', 'core/list', 'core/image', 'core/heading']}
					orientation="vertical"
					placeholder={__('Hier Inhalte einfügen…', 'tsc')}
				/>
			</div>
		</div>
	);
}
