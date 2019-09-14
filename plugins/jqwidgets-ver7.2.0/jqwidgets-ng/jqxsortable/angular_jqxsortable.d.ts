/// <reference path="../jqwidgets.d.ts" />
import { EventEmitter, ElementRef, OnChanges, SimpleChanges } from '@angular/core';
export declare class jqxSortableComponent implements OnChanges {
    attrAppendTo: string;
    attrAxis: number | string;
    attrCancel: string;
    attrConnectWith: string | boolean;
    attrContainment: string | boolean;
    attrCursor: string;
    attrCursorAt: jqwidgets.SortableCursorAt;
    attrDelay: number;
    attrDisabled: boolean;
    attrDistance: number;
    attrDropOnEmpty: boolean;
    attrForceHelperSize: boolean;
    attrForcePlaceholderSize: boolean;
    attrGrid: Array<number>;
    attrHandle: string | boolean;
    attrHelper: any;
    attrItems: string;
    attrOpacity: number | boolean;
    attrPlaceholderShow: string | boolean;
    attrRevert: number | boolean;
    attrScroll: boolean;
    attrScrollSensitivity: number;
    attrScrollSpeed: number;
    attrTolerance: any;
    attrZIndex: number;
    attrWidth: string | number;
    attrHeight: string | number;
    autoCreate: boolean;
    properties: string[];
    host: any;
    elementRef: ElementRef;
    widgetObject: jqwidgets.jqxSortable;
    constructor(containerElement: ElementRef);
    ngOnInit(): void;
    ngOnChanges(changes: SimpleChanges): boolean;
    arraysEqual(attrValue: any, hostValue: any): boolean;
    manageAttributes(): any;
    moveClasses(parentEl: HTMLElement, childEl: HTMLElement): void;
    moveStyles(parentEl: HTMLElement, childEl: HTMLElement): void;
    createComponent(options?: any): void;
    createWidget(options?: any): void;
    __updateRect__(): void;
    setOptions(options: any): void;
    appendTo(arg?: string): any;
    axis(arg?: number | string): any;
    cancel(arg?: string): any;
    connectWith(arg?: string | boolean): any;
    containment(arg?: string | boolean): any;
    cursor(arg?: string): any;
    cursorAt(arg?: jqwidgets.SortableCursorAt): any;
    delay(arg?: number): any;
    disabled(arg?: boolean): any;
    distance(arg?: number): any;
    dropOnEmpty(arg?: boolean): any;
    forceHelperSize(arg?: boolean): any;
    forcePlaceholderSize(arg?: boolean): any;
    grid(arg?: Array<number>): any;
    handle(arg?: string | boolean): any;
    helper(arg?: string): any;
    items(arg?: string): any;
    opacity(arg?: number | boolean): any;
    placeholderShow(arg?: string | boolean): any;
    revert(arg?: number | boolean): any;
    scroll(arg?: boolean): any;
    scrollSensitivity(arg?: number): any;
    scrollSpeed(arg?: number): any;
    tolerance(arg?: string): any;
    zIndex(arg?: number): any;
    cancelMethod(): void;
    destroy(): void;
    disable(): void;
    enable(): void;
    refresh(): void;
    refreshPositions(): void;
    serialize(object: undefined): undefined;
    toArray(): Array<any>;
    onActivate: EventEmitter<{}>;
    onBeforeStop: EventEmitter<{}>;
    onChange: EventEmitter<{}>;
    onDeactivate: EventEmitter<{}>;
    onOut: EventEmitter<{}>;
    onOver: EventEmitter<{}>;
    onReceive: EventEmitter<{}>;
    onRemove: EventEmitter<{}>;
    onSort: EventEmitter<{}>;
    onStart: EventEmitter<{}>;
    onStop: EventEmitter<{}>;
    onUpdate: EventEmitter<{}>;
    __wireEvents__(): void;
}
