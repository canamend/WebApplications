import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LayoutComponent } from './layout/layout.component';
import { MainComponent } from './pages/main/main.component';
import { LoginComponent } from './pages/login/login.component';
import { RegisterUserComponent } from './pages/register-user/register-user.component';
import { ConsultasComponent } from './pages/consultas/consultas.component';


const routes: Routes = [
  
  { path: '', component: LayoutComponent,
    children: [
      { path: 'home', component: MainComponent },
      { path: 'login', component: LoginComponent },
      { path: 'register', component: RegisterUserComponent},
      { path: 'consultas', component: ConsultasComponent },
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
export class InternautaRoutingModule { }
