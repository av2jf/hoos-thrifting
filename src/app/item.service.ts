import { Injectable } from '@angular/core';

import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';

import { Item } from './item';


@Injectable({
  providedIn: 'root'
})
export class ItemService {

  constructor(private http: HttpClient) { }

  sendRequest(data: any): Observable<any> {
    return this.http.post('http://localhost/hoos-thrifting/php/item-db.php', data);
  }

  getItem(func: string): Observable<Item[]> {
     return this.sendRequest(func);
  }

  addItem(item): Observable<string> {
     return (this.sendRequest(item.toString()))['content'];
  }

}
