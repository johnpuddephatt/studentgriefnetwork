import '@wordpress/edit-post';
import domReady from '@wordpress/dom-ready';
import { unregisterBlockStyle, registerBlockStyle } from '@wordpress/blocks';

domReady(() => {
  // unregisterBlockStyle('core/button', 'outline');
  registerBlockStyle('core/group', {
    name: 'with-birds',
    label: 'With birds',
  });

  registerBlockStyle('core/group', {
    name: 'with-meditation',
    label: 'Meditation',
  });

  registerBlockStyle('core/list', {
    name: 'pills',
    label: 'Pills',
  });

  registerBlockStyle('core/gallery', {
    name: 'overlapping',
    label: 'Overlapping',
  });

  registerBlockStyle('core/gallery', {
    name: 'no-stretch',
    label: 'No stretch',
  });

  registerBlockStyle('core/media-text', {
    name: 'no-margin',
    label: 'No margin',
  });
});
