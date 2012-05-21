require_relative "salon_service_decorator_base"

class HaircutDecorator < SalonServiceDecoratorBase
  def getDescription
     @decoratedSalonService.getDescription + 'Haircut '
  end
end