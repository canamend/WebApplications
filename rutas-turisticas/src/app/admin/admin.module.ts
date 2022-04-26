import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LayoutComponent } from './layout/layout.component';
import { MainComponent } from './pages/main/main.component';
import { RouterModule } from '@angular/router';
import { AdminRoutingModule } from './admin-routing.module';
import { NavbarComponent } from './components/navbar/navbar.component';
import { ConsultasComponent } from './pages/consultas/consultas.component';
import { EliminarRutaComponent } from './pages/eliminar-ruta/eliminar-ruta.component';
import { ReportesComponent } from './pages/reportes/reportes.component';
import { MaterialModule } from '../material/material.module';



@NgModule({
  declarations: [
    LayoutComponent,
    MainComponent,
    NavbarComponent,
    ConsultasComponent,
    EliminarRutaComponent,
    ReportesComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    AdminRoutingModule,
    MaterialModule
  ]
})
export class AdminModule { }
