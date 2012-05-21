require_relative "salon_service_decorator_base"

class StylingDecorator < SalonServiceDecoratorBase
  def getDescription
    @decoratedSalonService.getDescription + 'Styling '
  end
end