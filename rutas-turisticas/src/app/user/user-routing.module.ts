import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LayoutComponent } from './layout/layout.component';
import { ConsultasComponent } from './pages/consultas/consultas.component';
import { CrearRutaComponent } from './pages/crear-ruta/crear-ruta.component';
import { MainComponent } from './pages/main/main.component';
import { ModificarRutaComponent } from './pages/modificar-ruta/modificar-ruta.component';


const routes: Routes = [
  
  { path: '', component: LayoutComponent,
    children: [
      { path: 'home', component: MainComponent }, 
      { path: 'consultas', component: ConsultasComponent},
      { path: 'crear', component: CrearRutaComponent},
      { path: 'modificar', component: CrearRutaComponent},
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
export class UserRoutingModule { }
