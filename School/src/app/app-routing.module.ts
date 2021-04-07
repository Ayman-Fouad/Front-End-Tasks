import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutComponent } from './about/about.component';
import { AuthGuard } from './guard/auth.guard';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { StudentDetailComponent } from './student-detail/student-detail.component';

const routes: Routes = [
  {
    path:"",
    component: LoginComponent
  },
  {
    path:"student/:id",
    component: StudentDetailComponent,
    canActivate:[AuthGuard]
  },
  {
    path:"home",
    component: HomeComponent,
    canActivate: [AuthGuard]
  },
  {
    path:"about",
    component: AboutComponent,
    canActivate: [AuthGuard]
  },
  {
    path:"**",
    component: PageNotFoundComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
