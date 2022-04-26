import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LayoutComponent } from './layout/layout.component';
import { MainComponent } from './pages/main/main.component';
import { RouterModule } from '@angular/router';
import { UserRoutingModule } from './user-routing.module';
import { NavbarComponent } from './components/navbar/navbar.component';
import { ConsultasComponent } from './pages/consultas/consultas.component';
import { CrearRutaComponent } from './pages/crear-ruta/crear-ruta.component';
import { ModificarRutaComponent } from './pages/modificar-ruta/modificar-ruta.component';
import { MaterialModule } from '../material/material.module';



@NgModule({
  declarations: [
    LayoutComponent,
    MainComponent,
    NavbarComponent,
    ConsultasComponent,
    CrearRutaComponent,
    ModificarRutaComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    UserRoutingModule,
    MaterialModule
  ]
})
export class UserModule { }
