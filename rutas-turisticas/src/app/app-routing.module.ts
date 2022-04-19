import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: 'internauta',
    loadChildren: ()=> import('./internauta/internauta.module').then(m => m.InternautaModule)
  },
  {
    path: 'admin',
    loadChildren: () => import('./admin/admin.module').then(m => m.AdminModule)
  },
  {
    path: 'user',
    loadChildren: ()=>import('./user/user.module').then(m => m.UserModule)
  },
  { path:'', pathMatch: 'full', redirectTo: 'internauta' },
  { path: '**', pathMatch: 'full', redirectTo: ''},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
