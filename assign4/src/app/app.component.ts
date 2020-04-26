import { Component } from '@angular/core';

import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import {Observable} from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  title = 'Shop';

  goToUrl(page) {
    window.location.href = 'page';
  }

  constructor(private http: HttpClient) { }

  /*
  sendPost(data: any): Observable<any> {
    return this.http.post("https://localhost/hoos-thrifting/php/login.php", data, {responseType: 'text'});
    console.log(data);
  */

}

/*
import { Component, OnInit } from '@angular/core';
import { Item } from '../item';
import { ItemService } from '../item.service';


@Component({
  selector: 'app-shop',
  templateUrl: './shop.component.html',
  styleUrls: ['./shop.component.css']
})
export class ShopComponent implements OnInit {
    title = 'Shop';
    url = 'shop';
    
    constructor(private itemService: ItemService) {}

    responsedata = new Array<Item>();

    confirm_msg = '';

    // get all items
    getShopItems(): void {
        this.itemService.getItem('shop')
           .subscribe((res) => {
               var resArr = res['content'];
               for (var i = 0; i < resArr['length']; i++) {
                   this.responsedata[i] = resArr[i];
               }});
    }

    ngOnInit(): void {
        this.getShopItems();
    }

}

*/