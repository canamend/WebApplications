import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LoginComponent } from './pages/login/login.component';
import { RegisterUserComponent } from './pages/register-user/register-user.component';



@NgModule({
  declarations: [
    LoginComponent,
    RegisterUserComponent
  ],
  imports: [
    CommonModule
  ]
})
export class InternautaModule { }
