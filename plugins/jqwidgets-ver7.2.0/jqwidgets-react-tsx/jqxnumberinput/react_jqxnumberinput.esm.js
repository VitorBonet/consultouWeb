import * as jqxcore from '../../jqwidgets/jqxcore';
import * as jqxbuttons from '../../jqwidgets/jqxbuttons';
import * as jqxnumberinput from '../../jqwidgets/jqxnumberinput';
import { createElement, PureComponent } from 'react';

/*! *****************************************************************************
Copyright (c) Microsoft Corporation. All rights reserved.
Licensed under the Apache License, Version 2.0 (the "License"); you may not use
this file except in compliance with the License. You may obtain a copy of the
License at http://www.apache.org/licenses/LICENSE-2.0

THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
MERCHANTABLITY OR NON-INFRINGEMENT.

See the Apache Version 2.0 License for specific language governing permissions
and limitations under the License.
***************************************************************************** */
/* global Reflect, Promise */

var extendStatics = function(d, b) {
    extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return extendStatics(d, b);
};

function __extends(d, b) {
    extendStatics(d, b);
    function __() { this.constructor = d; }
    d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
}

var JqxNumberInput = /** @class */ (function (_super) {
    __extends(JqxNumberInput, _super);
    function JqxNumberInput(props) {
        var _this = _super.call(this, props) || this;
        /* tslint:disable:variable-name */
        _this._jqx = JQXLite;
        _this._id = 'JqxNumberInput' + _this._jqx.generateID();
        _this._componentSelector = '#' + _this._id;
        _this.state = { lastProps: props };
        return _this;
    }
    JqxNumberInput.getDerivedStateFromProps = function (props, state) {
        if (!Object.is) {
            Object.is = function (x, y) {
                if (x === y) {
                    return x !== 0 || 1 / x === 1 / y;
                }
                else {
                    return x !== x && y !== y;
                }
            };
        }
        var areEqual = Object.is(props, state.lastProps);
        if (!areEqual) {
            var newState = { lastProps: props };
            return newState;
        }
        return null;
    };
    JqxNumberInput.prototype.componentDidMount = function () {
        var widgetOptions = this._manageProps();
        this._jqx(this._componentSelector).jqxNumberInput(widgetOptions);
        this._wireEvents();
    };
    JqxNumberInput.prototype.componentDidUpdate = function () {
        var widgetOptions = this._manageProps();
        this.setOptions(widgetOptions);
    };
    JqxNumberInput.prototype.render = function () {
        return (createElement("div", { id: this._id, className: this.props.className, style: this.props.style }, this.props.children));
    };
    JqxNumberInput.prototype.setOptions = function (options) {
        this._jqx(this._componentSelector).jqxNumberInput(options);
    };
    JqxNumberInput.prototype.getOptions = function (option) {
        return this._jqx(this._componentSelector).jqxNumberInput(option);
    };
    JqxNumberInput.prototype.clear = function () {
        this._jqx(this._componentSelector).jqxNumberInput('clear');
    };
    JqxNumberInput.prototype.destroy = function () {
        this._jqx(this._componentSelector).jqxNumberInput('destroy');
    };
    JqxNumberInput.prototype.focus = function () {
        this._jqx(this._componentSelector).jqxNumberInput('focus');
    };
    JqxNumberInput.prototype.getDecimal = function () {
        return this._jqx(this._componentSelector).jqxNumberInput('getDecimal');
    };
    JqxNumberInput.prototype.setDecimal = function (index) {
        this._jqx(this._componentSelector).jqxNumberInput('setDecimal', index);
    };
    JqxNumberInput.prototype.val = function (value) {
        if (value) {
            this._jqx(this._componentSelector).jqxNumberInput('val', value);
        }
        else {
            return this._jqx(this._componentSelector).jqxNumberInput('val');
        }
    };
    JqxNumberInput.prototype._manageProps = function () {
        var widgetProps = ['allowNull', 'decimal', 'disabled', 'decimalDigits', 'decimalSeparator', 'digits', 'groupSeparator', 'groupSize', 'height', 'inputMode', 'min', 'max', 'negativeSymbol', 'placeHolder', 'promptChar', 'rtl', 'readOnly', 'spinMode', 'spinButtons', 'spinButtonsWidth', 'spinButtonsStep', 'symbol', 'symbolPosition', 'textAlign', 'template', 'theme', 'value', 'width'];
        var options = {};
        for (var prop in this.props) {
            if (widgetProps.indexOf(prop) !== -1) {
                options[prop] = this.props[prop];
            }
        }
        return options;
    };
    JqxNumberInput.prototype._wireEvents = function () {
        for (var prop in this.props) {
            if (prop.indexOf('on') === 0) {
                var originalEventName = prop.slice(2);
                originalEventName = originalEventName.charAt(0).toLowerCase() + originalEventName.slice(1);
                this._jqx(this._componentSelector).on(originalEventName, this.props[prop]);
            }
        }
    };
    return JqxNumberInput;
}(PureComponent));
var jqx = window.jqx;
var JQXLite = window.JQXLite;

export default JqxNumberInput;
export { jqx, JQXLite };
