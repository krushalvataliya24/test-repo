import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ChartsComponent } from './charts.component';

const routes: Routes = [
  { path: '', redirectTo: 'chart-apex', pathMatch: 'full' },
  {
    path: '',
    component: ChartsComponent,
    children: [
      {
        path: 'chart-apex',
        loadChildren: () =>
          import('./chart-apex/chart-apex.module').then(
            (m) => m.ChartApexModule
          ),
      },
      { 
        path: 'chart-ng2', 
        loadChildren: () => 
        import('./chart-ng2/chart-ng2.module').then(
          (m) => m.ChartNg2Module) 
      },
      { 
        path: 'prime-ng', 
        loadChildren: () => 
        import('./prime-ng/prime-ng.module').
        then(
          (m) => m.PrimeNgModule) 
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ChartsRoutingModule {}
