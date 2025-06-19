import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-icon-remix',
    templateUrl: './icon-remix.component.html',
    styleUrl: './icon-remix.component.scss',
    standalone: false
})
export class IconRemixComponent {
public routes=routes;
}
