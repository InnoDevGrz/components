import {
	useBlockProps,
	MediaUpload,
	MediaUploadCheck,
	InnerBlocks,
	InspectorControls,
	PanelColorSettings,
} from '@wordpress/block-editor';
import { Button, PanelBody } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { imageUrl, innerColor, innerBgColor } = attributes;

	const onSelectImage = (media) => setAttributes({ imageUrl: media.url });

	const blockProps = useBlockProps();

	return (
		<>
			<InspectorControls>
				<PanelBody title="Hintergrundfarbe (innerer Container)" initialOpen={true}>
					<PanelColorSettings
						colorSettings={[
							{
								value: innerBgColor,
								onChange: (color) => setAttributes({ innerBgColor: color }),
								label: 'Hintergrundfarbe',

							},
							{
								value: innerColor,
								onChange: (color) => setAttributes({ innerColor: color }),
								label: 'Textfarbe',

							},
						]}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps} >
				{imageUrl ? (
					<>
						<img
							src={imageUrl}
							alt=""
							style={{ maxWidth: '100%', height: 'auto' }}
						/>

						<div
							className="inner-container"
							style={{
								backgroundColor: innerBgColor || '#332461',
								color: innerColor || '#ffffff',
								padding: '1rem',
								borderRadius: "15px"
							}}
						>
							<InnerBlocks />
						</div>

						<MediaUploadCheck>
							<MediaUpload
								onSelect={onSelectImage}
								render={({ open }) => (
									<Button
										onClick={open}
										variant="secondary"
										style={{ marginTop: '10px' }}
									>
										Bild ändern
									</Button>
								)}
							/>
						</MediaUploadCheck>
					</>
				) : (
					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectImage}
							render={({ open }) => (
								<Button onClick={open} variant="primary">
									Bild auswählen
								</Button>
							)}
						/>
					</MediaUploadCheck>
				)}
			</div>
		</>
	);
}
