import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ShopComponent } from './shop/shop.component';
import { SellComponent } from './sell/sell.component';
import { FundraiseComponent } from './fundraise/fundraise.component';
import { ProfileComponent } from './profile/profile.component';
import { CartComponent } from './cart/cart.component';
import { ContactComponent } from './contact/contact.component';
import { FaqComponent } from './faq/faq.component';
import { PnfComponent } from './pnf/pnf.component';
import { HomeComponent } from './home/home.component';
import { CartdefaultComponent } from './cartdefault/cartdefault.component';

@NgModule({
  declarations: [
    AppComponent,
    ShopComponent,
    SellComponent,
    FundraiseComponent,
    ProfileComponent,
    CartComponent,
    ContactComponent,
    FaqComponent,
    PnfComponent,
    HomeComponent,
    CartdefaultComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
