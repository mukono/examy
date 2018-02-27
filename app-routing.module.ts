import {NgModule} from '@angular/core';
import { InfosComponent } from './infos/infos.component';
import {RouterModule,Routes} from '@angular/router';

           const routes: Routes=[
           {
           path: '',
           component: InfosComponent
           }
           ];

           @NgModule({
           imports: [RouterModule.forRoot(routes)],
           exports: [RouterModule]
           })
           export class AppRoutingModule{}