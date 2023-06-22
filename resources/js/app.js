import './bootstrap';

import Alpine from 'alpinejs';
import AlpineFloatingUI from '@awcodes/alpine-floating-ui';
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm';
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm';
import focus from '@alpinejs/focus';



Alpine.plugin(focus);
Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(AlpineFloatingUI);
Alpine.plugin(NotificationsAlpinePlugin);

window.Alpine = Alpine;

Alpine.start();
