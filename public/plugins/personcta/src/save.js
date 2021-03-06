/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({ attributes }) {

	const ctaHandler = () => {
		alert('hello')
		window.location = attributes.ctaLink
	}

	let bgClass
	let nameClass
	if(attributes.color === 'white') {
		bgClass = 'person_bgWhite'
		nameClass = 'person_nameWhite'
	} 
	if(attributes.color === 'yellow') {
		bgClass = 'person_bgYellow'
		nameClass = 'person_nameYellow'
	} 
	if(attributes.color === 'blue') {
		bgClass = 'person_bgBlue'
		nameClass = 'person_nameBlue'
	} 

	return (
		<div className={`flexContainer ${bgClass}`}>
			<div className='orangeDiv'/>
			<div className='imageContainer'>
				<img src={attributes.mediaUrl}></img>
			</div>
			<div className='textContainer'>
				<p className={`lowerText`}>{attributes.name}</p>
				<p className='upperText'>{attributes.text}</p>
				<a href={attributes.ctaLink} className='ctaButton'>{attributes.ctaText}</a>
			</div>
		</div>
	);
}
