import { IHandlers } from "../../ts-common/types";
import { IEventSystem } from "../../ts-common/events";
import { ICoords, IGrid } from "../../ts-grid";
import { IToolbar } from "../../ts-toolbar";
import { ContextMenu, Menu } from "../../ts-menu";
import { EditLine } from "./EditLine";
import { Exporter } from "./Exporter";
import { IFormula, DataPage, DataStore } from "../../muon";
import { DataCollection } from "../../ts-data";
import { IKeyManager } from "../../ts-common/newKeyManager";
import { ISelectedCell } from "./Selection";
declare type cellValue = number | string | boolean;
interface IValue {
    value?: cellValue;
    [key: string]: any;
}
export interface ISpreadsheetConfig {
    toolbarBlocks?: ToolbarBlocks[];
    rowsCount?: number;
    colsCount?: number;
    editLine?: boolean;
    menu?: boolean;
    readonly?: boolean;
    autoFormat?: boolean;
    leftSplit?: number;
    topSplit?: number;
    multiSheets?: boolean;
    hotkeys?: IHandlers;
    localization?: ILocalization;
    importModulePath?: string;
    exportModulePath?: string;
    formats?: IFormats[];
    /** @deprecated use localization config instead */
    dateFormat?: string;
    /** @deprecated use localization config instead */
    timeFormat?: number;
}
export interface ILocalization {
    decimal?: "." | ",";
    thousands?: "." | "," | " " | "";
    currency?: string;
    dateFormat?: string;
    timeFormat?: 12 | 24;
}
export interface IEditor {
    toHTML(conf: any): any;
    setValue(val: any): any;
    endEdit(withoutSave?: boolean): void;
    hidePopup?(): void;
}
export type formatAliases = "common" | "number" | "currency" | "percent" | "text" | "date" | "time";
export interface IFormats {
    id: formatAliases | string;
    mask: string;
    name?: string;
    example?: string;
    timeFormat?: number;
    $value?: any;
}
export type IMuonCell = [number, number, IValue];
export type ToolbarBlocks = "default" | "undo" | "colors" | "columns" | "rows" | "cells" | "lock" | "align" | "decoration" | "clear" | "help" | "format" | "actions" | "file";
export interface IStylesList {
    [key: string]: string;
}
export interface ISpreadsheet {
    selection: ISelection;
    events: IEventSystem<SpreadsheetEvents, IEventHandlersMap>;
    config: ISpreadsheetConfig;
    toolbar: IToolbar;
    menu: Menu;
    contextMenu: ContextMenu;
    container: HTMLElement;
    export: Exporter;
    keyManager: IKeyManager;
    getFormula: (cell: string) => string | string[];
    getValue: (cell: string) => any | any[];
    setValue: (cell: string, value: any | any[]) => void;
    getStyle: (cell: string) => IStylesList | IStylesList[];
    setStyle: (cell: string, styles: string | string[] | IStylesList | IStylesList[]) => void;
    getFormat: (cell: string) => string | string[];
    setFormat: (cell: string, format: string | string[]) => void;
    clear: () => void;
    clearSheet: (id?: string) => void;
    getCellIndex: (cell1: string, cell2: string) => ICell;
    lock: (cell: string) => void;
    unlock: (cell: string) => void;
    isLocked: (cell: string) => boolean;
    deleteColumn: (cell: string) => void;
    deleteRow: (cell: string) => void;
    addColumn: (cell: string) => void;
    addRow: (cell: string) => void;
    load: (url: string, type?: FileFormat) => Promise<any>;
    parse: (data: any) => void;
    serialize: () => any[] | IDataWithStyles;
    eachCell: (cb: (cellName: string, cellValue: any) => any, range?: string) => void;
    removeSheet: (id: string) => void;
    addSheet: (name?: string) => string;
    getSheets: () => ISheet[];
    getActiveSheet: () => ISheet;
    setActiveSheet: (id: Id) => void;
    setValidation: (cell: string, options: string | string[]) => void;
    sortCells: (cell: string, dir?: 1 | -1) => void;
    undo(): void;
    redo(): void;
    startEdit(cell?: string, initialValue?: string): any;
    endEdit(withoutSave?: boolean): void;
}
export interface ISelection {
    setSelectedCell(cell: string, scroll?: boolean): any;
    getSelectedCell(): string;
    setFocusedCell(cell: string, scroll?: boolean): any;
    getFocusedCell(): string;
    removeSelectedCell(cell: string): any;
}
export interface ISheet {
    name: string;
    id: Id;
}
export interface IDataWithStyles {
    data?: ICellInfo[];
    styles: {
        [key: string]: any;
    };
    formats?: IFormats[];
    sheets?: ISheetData[];
}
export interface ISheetData {
    data: ICellInfo[];
    name?: string;
    id?: string;
    cols?: {
        width: number;
    }[];
    rows?: {
        height: number;
    }[];
    merged?: ISpan[];
}
export interface ICopyData {
    values: string[];
    rowsCount: number;
    colsCount: number;
    formats: any;
    styles?: {};
    spans?: ISpan[];
}
export declare enum SpreadsheetEvents {
    /** @deprecated use beforeAction instead */
    beforeValueChange = "beforeValueChange",
    /** @deprecated use afterAction instead */
    afterValueChange = "afterValueChange",
    /** @deprecated use beforeAction instead */
    beforeStyleChange = "beforeStyleChange",
    /** @deprecated use afterAction instead */
    afterStyleChange = "afterStyleChange",
    /** @deprecated use beforeAction instead */
    beforeFormatChange = "beforeFormatChange",
    /** @deprecated use afterAction instead */
    afterFormatChange = "afterFormatChange",
    beforeSelectionSet = "beforeSelectionSet",
    afterSelectionSet = "afterSelectionSet",
    beforeSelectionRemove = "beforeSelectionRemove",
    afterSelectionRemove = "afterSelectionRemove",
    /** @deprecated use beforeAction instead */
    beforeRowAdd = "beforeRowAdd",
    /** @deprecated use afterAction instead */
    afterRowAdd = "afterRowAdd",
    /** @deprecated use beforeAction instead */
    beforeRowDelete = "beforeRowDelete",
    /** @deprecated use afterAction instead */
    afterRowDelete = "afterRowDelete",
    /** @deprecated use beforeAction instead */
    beforeColumnAdd = "beforeColumnAdd",
    /** @deprecated use afterAction instead */
    afterColumnAdd = "afterColumnAdd",
    /** @deprecated use beforeAction instead */
    beforeColumnDelete = "beforeColumnDelete",
    /** @deprecated use afterAction instead */
    afterColumnDelete = "afterColumnDelete",
    beforeFocusSet = "beforeFocusSet",
    afterFocusSet = "afterFocusSet",
    beforeEditStart = "beforeEditStart",
    afterEditStart = "afterEditStart",
    beforeAction = "beforeAction",
    afterAction = "afterAction",
    beforeEditEnd = "beforeEditEnd",
    afterEditEnd = "afterEditEnd",
    groupFill = "groupFill",
    /** @deprecated use beforeAction instead */
    beforeSheetAdd = "beforeSheetAdd",
    /** @deprecated use afterAction instead */
    afterSheetAdd = "afterSheetAdd",
    /** @deprecated use beforeAction instead */
    beforeSheetRemove = "beforeSheetRemove",
    /** @deprecated use afterAction instead */
    afterSheetRemove = "afterSheetRemove",
    /** @deprecated use beforeAction instead */
    beforeSheetRename = "beforeSheetRename",
    /** @deprecated use afterAction instead */
    afterSheetRename = "afterSheetRename",
    beforeSheetChange = "beforeSheetChange",
    afterSheetChange = "afterSheetChange",
    /** @deprecated use beforeAction instead */
    beforeSheetClear = "beforeSheetClear",
    /** @deprecated use afterAction instead */
    afterSheetClear = "afterSheetClear",
    beforeClear = "beforeClear",
    afterClear = "afterClear",
    editLineInput = "editLineInput",
    editLineFocus = "editLineFocus",
    editLineBlur = "editLineBlur",
    cellInput = "cellInput",
    gridRedraw = "gridRedraw",
    afterPopupHide = "afterPopupHide"
}
export interface IEventHandlersMap {
    [key: string]: (...args: any[]) => any;
    [SpreadsheetEvents.beforeAction]: (action: string, config: any) => void | boolean;
    [SpreadsheetEvents.afterAction]: (action: string, config: any) => void;
    [SpreadsheetEvents.afterColumnAdd]: (cell: string) => void;
    [SpreadsheetEvents.beforeColumnAdd]: (cell: string) => void | boolean;
    [SpreadsheetEvents.afterColumnDelete]: (cell: string) => void;
    [SpreadsheetEvents.beforeColumnDelete]: (cell: string) => void | boolean;
    [SpreadsheetEvents.afterEditEnd]: (cell: string, value: string) => void;
    [SpreadsheetEvents.beforeEditEnd]: (cell: string, value: string) => void | boolean;
    [SpreadsheetEvents.beforeEditStart]: (cell: string, value: string) => void | boolean;
    [SpreadsheetEvents.afterEditStart]: (cell: string, value: string) => void;
    [SpreadsheetEvents.afterFocusSet]: (cell: string) => void;
    [SpreadsheetEvents.beforeFocusSet]: (cell: string) => void | boolean;
    [SpreadsheetEvents.afterFormatChange]: (cell: string, format: string) => void;
    [SpreadsheetEvents.beforeFormatChange]: (cell: string, format: string) => void | boolean;
    [SpreadsheetEvents.afterRowAdd]: (cell: string) => void;
    [SpreadsheetEvents.beforeRowAdd]: (cell: string) => void | boolean;
    [SpreadsheetEvents.afterRowDelete]: (cell: string) => void;
    [SpreadsheetEvents.beforeRowDelete]: (cell: string) => void | boolean;
    [SpreadsheetEvents.afterSelectionSet]: (cell: string) => void;
    [SpreadsheetEvents.beforeSelectionSet]: (cell: string) => void | boolean;
    [SpreadsheetEvents.afterSheetAdd]: (sheet: ISheet) => void;
    [SpreadsheetEvents.beforeSheetAdd]: (name: string) => void | boolean;
    [SpreadsheetEvents.beforeSheetChange]: (sheet: ISheet) => void | boolean;
    [SpreadsheetEvents.afterSheetChange]: (sheet: ISheet) => void;
    [SpreadsheetEvents.afterSheetRemove]: (sheet: ISheet) => void;
    [SpreadsheetEvents.beforeSheetRemove]: (sheet: ISheet) => void | boolean;
    [SpreadsheetEvents.afterSheetRename]: (sheet: ISheet) => void;
    [SpreadsheetEvents.beforeSheetRename]: (sheet: ISheet, value: string) => void | boolean;
    [SpreadsheetEvents.afterStyleChange]: (cell: string, style: string | string[] | IStylesList | IStylesList[]) => void;
    [SpreadsheetEvents.beforeStyleChange]: (cell: string, style: string | string[] | IStylesList | IStylesList[]) => void | boolean;
    [SpreadsheetEvents.beforeValueChange]: (cell: string, value: string) => void | boolean;
    [SpreadsheetEvents.afterValueChange]: (cell: string, value: string) => void;
    [SpreadsheetEvents.groupFill]: (focusedCell: string, selectedCell: string) => void;
    [SpreadsheetEvents.editLineInput]: (value: string) => void;
    [SpreadsheetEvents.editLineFocus]: (value: string, e: any) => void;
    [SpreadsheetEvents.editLineBlur]: (value: string, e: any) => void;
    [SpreadsheetEvents.cellInput]: (cell: string, value: string) => void;
    [SpreadsheetEvents.gridRedraw]: () => void;
    [SpreadsheetEvents.afterPopupHide]: () => void;
}
export interface IAction {
    do(...args: any[]): any;
    undo(): void;
    config: any;
}
export interface IExecuteConfig {
    row?: number;
    col?: number;
    target?: any;
    val?: any;
    prev?: any;
    action?: Actions;
    groupAction?: Actions;
    cell?: string;
    dataStore?: DataStore;
    sheets?: DataCollection;
    page?: DataPage;
    [key: string]: any;
}
export interface IActionConfig extends IExecuteConfig {
    spreadsheet?: ISpreadsheet;
    grid?: IGrid;
    editLine?: EditLine;
    activePage: DataPage;
}
export declare enum Actions {
    setCellStyle = "setCellStyle",
    setCellValue = "setCellValue",
    setCellFormat = "setCellFormat",
    removeCellStyles = "removeCellStyles",
    lockCell = "lockCell",
    deleteRow = "deleteRow",
    addRow = "addRow",
    deleteColumn = "deleteColumn",
    addColumn = "addColumn",
    groupAction = "groupAction",
    groupRowAction = "groupRowAction",
    groupColAction = "groupColAction",
    addSheet = "addSheet",
    deleteSheet = "deleteSheet",
    renameSheet = "renameSheet",
    clearSheet = "clearSheet",
    clear = "clear",
    resizeCol = "resizeCol",
    resizeRow = "resizeRow",
    setValidation = "setValidation",
    sortCells = "sortCells",
    insertLink = "insertLink",
    fitColumn = "fitColumn",
    filter = "filter",
    merge = "merge",
    unmerge = "unmerge"
}
export interface IActionsManager {
    execute(commandsPack: IExecuteConfig[]): void;
    execute(command: Actions, config?: IExecuteConfig): void;
    undo(): void;
    redo(): void;
}
export type CellFormats = string;
export type Id = string | number;
export type CellTypes = "string" | "number";
interface CellEditor {
    type: "select";
    options?: string | string[];
}
export interface ICellInfo {
    cell: string;
    value: string;
    css?: string;
    format?: string;
    editor?: CellEditor;
}
export interface ILink {
    text?: string;
    href: string;
}
export interface ICellMeta {
    locked?: boolean;
    edited?: boolean;
    selected?: boolean;
    css?: string;
    editorValue?: string;
    editor?: CellEditor;
    nextValue?: any;
    format?: IFormats;
    type?: CellTypes;
    value?: string | number | boolean;
    link?: ILink;
    [key: string]: any;
}
export interface IPageMeta {
    cols?: {
        width: number;
    }[];
    rows?: {
        height: number;
    }[];
    inserted?: boolean;
    scroll?: ICoords;
    toolbarId?: Id;
    selectedCells?: string[];
    focusedCell?: ISelectedCell;
    leftSplit?: number;
    filter?: IFilter;
}
export interface IFilter {
    cell: string;
    rules: IFilterRules[];
}
export declare enum FilterConditions {
    e = "e",
    ne = "ne",
    tc = "tc",
    tdc = "tdc",
    ts = "ts",
    te = "te",
    tex = "tex",
    d = "d",
    db = "db",
    da = "da",
    gt = "gt",
    geq = "geq",
    lt = "lt",
    leq = "leq",
    eq = "eq",
    neq = "neq",
    ib = "ib",
    inb = "inb"
}
export interface IFilterRules {
    condition?: {
        factor: FilterConditions;
        value?: any;
    };
    exclude?: any[];
}
export interface IRow {
    id: Id;
}
export interface ICol {
    id: Id;
    $edit?: any;
    header?: any[];
}
export interface ISpan {
    from: {
        row: number;
        column: number;
    };
    to: {
        row: number;
        column: number;
    };
}
export interface ICell {
    row: string;
    col: string;
}
export interface IRange {
    start: ICell;
    end: ICell;
}
export interface ICellIndex {
    row: number;
    col: number;
}
export interface IRangeIndex {
    start: ICellIndex;
    end: ICellIndex;
}
export interface IBufferManager {
    store: (operation: IBufferStruct["operation"], col?: number, row?: number) => void;
    paste: () => void;
    getStruct: () => IBufferStruct;
}
export interface IBufferStruct {
    value: string | string[] | number | number[];
    styles: IStylesList | IStylesList[];
    cell: string;
    math: IFormula[];
    meta: any[];
    cells: string;
    formats: string[];
    inserted: boolean;
    operation: "cut" | "copy" | "";
    html: string;
    spans: ISpan[];
}
export type FileFormat = "json" | "csv" | "xlsx";
export type TColMeta = {
    width: number;
    wrappedRows: Set<number>;
};
export {};
