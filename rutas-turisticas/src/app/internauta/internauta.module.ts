import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LoginComponent } from './pages/login/login.component';
import { RegisterUserComponent } from './pages/register-user/register-user.component';
import { LayoutComponent } from './layout/layout.component';
import { MainComponent } from './pages/main/main.component';
import { RouterModule } from '@angular/router';
import { InternautaRoutingModule } from './internauta-routing.module';
import { NavbarComponent } from './components/navbar/navbar.component';
import { ConsultasComponent } from './pages/consultas/consultas.component';
import { MaterialModule } from '../material/material.module';



@NgModule({
  declarations: [
    LoginComponent,
    RegisterUserComponent,
    LayoutComponent,
    MainComponent,
    NavbarComponent,
    ConsultasComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    InternautaRoutingModule,
    MaterialModule
  ]
})
export class InternautaModule { }
