<?php
namespace App\Controller\Admin\Component;
use Cake\Controller\Admin\Component;
use Cake\Http\Exception\BadRequestException; //400
use Cake\Http\Exception\UnauthorizedException; //401
use Cake\Http\Exception\ForbiddenException; //402
use Cake\Http\Exception\InvalidCsrfTokenException; //403
use Cake\Http\Exception\NotFoundException; //404
use Cake\Http\Exception\MethodNotAllowedException; //405
use Cake\Http\Exception\NotAcceptableException; //406
use Cake\Http\Exception\ConflictException; //409
use Cake\Http\Exception\GoneException; //410
use Cake\Http\Exception\InternalErrorException; //500
use Cake\Http\Exception\NotImplementedException; //501
use Cake\Http\Exception\ServiceUnavailableException; //503

class ErrorComponent extends Component
{
    public function emitError($code, $message = null)
    {
        switch ($code) {
            case 400:                
                throw new BadRequestException(__($message));
                break;
            case 401:                
                throw new UnauthorizedException(__($message));
                break;
            case 402:                
                throw new ForbiddenException(__($message));
                break;
            case 403:                
                throw new InvalidCsrfTokenException(__($message));
                break;
            case 404:                
                throw new NotFoundException(__($message));
                break;
            case 405:                        
                throw new MethodNotAllowedException(__($message));
                break;
            case 406:                        
                throw new NotAcceptableException(__($message));
                break;
            case 409:                        
                throw new ConflictException(__($message));
                break;
            case 410:                        
                throw new GoneException(__($message));
                break;
            case 500:                        
                throw new InternalErrorException(__('Ocorreu um erro, por favor, tente novamente!'));
                break;
            case 501:                        
                throw new NotImplementedException(__($message));
                break;
            case 503:                        
                throw new ServiceUnavailableException(__('Servico insdisponivel no momente, por favor, tente novamente mais tarde!'));
                break;
            default:
                throw new InternalErrorException(__('Ocorreu um erro, por favor, tente novamente mais tarde!'));
                break;
        }
    }
}
