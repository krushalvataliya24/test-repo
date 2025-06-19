import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-icon-tabler',
    templateUrl: './icon-tabler.component.html',
    styleUrl: './icon-tabler.component.scss',
    standalone: false
})
export class IconTablerComponent {
 public routes=routes;
}
