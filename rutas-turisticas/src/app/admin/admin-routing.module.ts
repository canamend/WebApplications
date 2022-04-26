import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ConsultasComponent } from '../admin/pages/consultas/consultas.component';
import { LayoutComponent } from './layout/layout.component';
import { EliminarRutaComponent } from './pages/eliminar-ruta/eliminar-ruta.component';
import { MainComponent } from './pages/main/main.component';
import { ReportesComponent } from './pages/reportes/reportes.component';


const routes: Routes = [
  
  { path: '', component: LayoutComponent,
    children: [
      { path: 'home', component: MainComponent },
      { path: 'consultas', component: ConsultasComponent},
      { path: 'eliminar', component: EliminarRutaComponent},
      {path: 'reportes', component: ReportesComponent},
      { path: '**', pathMatch: 'full', redirectTo: 'home' }
    ]
  },
]

@NgModule({
  declarations: [],
  imports: [
    RouterModule.forChild(routes)
  ],
  exports: [
    RouterModule
  ]
})
export class AdminRoutingModule { }
